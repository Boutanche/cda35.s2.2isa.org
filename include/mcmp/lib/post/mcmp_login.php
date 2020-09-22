<?php
require_once './include/mcmp/lib/manager/AdherentDAO.php';
if(isset($_POST['login_Log']) AND isset($_POST['password_Log'])) {
    if (!empty($_POST['login_Log']) and !empty($_POST['password_Log'])) {
        //Lutter contre la faille XSS :
        $xssLog = htmlspecialchars($_POST['login_Log']);
        $xssPass = htmlspecialchars($_POST['password_Log']);
        $strReplaceLog = str_replace('\n',"",$xssLog);
        $strReplacePass = str_replace('\n',"",$xssPass);
        $daoAdherent = new AdherentDAO($bdd);
        if ($daoAdherent->exists_Log($strReplaceLog)) {
            $thisAdherent = new Adherent($daoAdherent->findByLogin($strReplaceLog));
            $isPasswordCorrect = password_verify($strReplacePass, $thisAdherent->getPassword());
            if ($isPasswordCorrect) {
                sleep(1); // Just For Wait
                //***************************************************//
                /* ------------------------------------------
                 * ------------------------------------------
                 * BUG : RECUPERATION ID ADHERENT :
                 * ------------------------------------------
                 * ------------------------------------------
                        //TODO : Régler le pbm : $ThisIdAdherent = Null :
                        //TODO : PBM : AdherentDAO.php et constructeur de Adherent.php
                        //TODO !
                            /*
                            echo $prenom;
                            echo $thisAdherent->getIdAdherent();
                            $idConnected = $thisAdherent->getIdAdherent();
                            */
                /*-------------------------------------------
                 * ------------------------------------------
                 * BUG NON RESOLU :
                 * ------------------------------------------
                 * ------------------------------------------
                 * ------------------------------------------
                 * SOLUTION TEMPORAIRE ----------------------
                 * ------------------------------------------
                 * BUG-FIX de _benoit 13/09/2020 : "php à l'ancienne" pour récupération Id de Adherent.
                 * ------------------------------------------
                 ------------------------------------------*/
                $reqSOS = $bdd->prepare('SELECT IdAdherent FROM mcmp_adherent WHERE Login = :login');
                $reqSOS->bindValue(':login', $thisAdherent->getLogin());
                $reqSOS->execute();
                $id = $reqSOS->fetch();
                //***************************************************//
                //**Fin Résulution d'un bug par l'application d'un "pansement pas propre" : **//
                //Je ne suis absoluement pas satisfait de cette partie du code.
                //Necessaire pour livraison.
                //TODO : A CORRIGER RAPIDEMENT :
                /*-----------------------------------------*/
                /*-------------------------------------------
                 * ------------------------------------------
                 * FIN DE BUG :
                 * SOLUTION RAPIDE ET TEMPORAIRE : "php à l'ancienne".
                 * ------------------------------------------
                   ------------------------------------------*/
                $nom = $thisAdherent->getNom();
                $prenom = $thisAdherent->getPrenom();
                $idConnected = $id['IdAdherent'];

                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['id_adherent'] = $id['IdAdherent'];
                $user_level = 1;
                //**************************************************//
                //TODO : REGLES DE GESTION DES UTILISATEURS ET DES ROLES :
                //TODO : non-connecté ->prospect ->membre -> organisateur -> trésorier ->secrétaire ->président
                //J'avais anticipé : 2 roles en plus du visiteur non connecté :
                //1 : Membre :
                //2 : Organisateur :
                //TODO : Reste à gérer :
                //      Un organisateur peut être : Président, Secrétaire, Trésorier
                //  3 : Un visiteur peut s'inscrire au site et devenir un "Prospect" :
                //  Il accède aux mêmes droits qu'on membre.
                //  Le plus simple serait de modifier la BDD.
                //*************************************************//
                if ($thisAdherent->getIdRole() >= 2) {
                    $user_level = 2;
                }
                if ($thisAdherent->getIdRole() >= 6) {
                    $user_level = 3;
                }
                $_SESSION['user_level'] = $user_level;
                $message_log = "Bravo " . $prenom . " " . $nom . " vous êtes connecté ";
                $page = $homepage;
                //**************************************//
                //Cookie Ticket pour sécurité le ByPass :
                //**************************************//
                $cookie_name = "ticket";
                // On génère quelque chose d'aléatoire
                $ticket = session_id() . microtime() . rand(0, 9999999999);
                // on hash pour avoir quelque chose de propre qui aura toujours la même forme
                $ticket = hash('sha512', $ticket);
                // On enregistre des deux cotés
                setcookie($cookie_name, $ticket, time() + (60 * 20)); // Expire au bout de 20 min
                $_SESSION['ticket'] = $ticket;
                //************************************//
                //Fin de gestion du Cookie sécurité :
                //************************************//
            }
            else{
                $message_log ="Mauvais mot de passe";
                sleep(3);
            }
        } else {
            $message_log = "Mauvais identifiant";
            $page = $homepage;
            sleep(3);
        }
    }
}
