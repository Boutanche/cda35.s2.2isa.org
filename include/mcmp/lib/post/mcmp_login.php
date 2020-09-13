<?php
require_once './include/mcmp/lib/manager/AdherentDAO.php';
if(isset($_POST['login_Log']) AND isset($_POST['password_Log'])) {
    if (!empty($_POST['login_Log']) and !empty($_POST['password_Log'])) {
        $daoAdherent = new AdherentDAO($bdd);
        if ($daoAdherent->exists_Log($_POST['login_Log'])) {
            $thisAdherent = new Adherent($daoAdherent->findByLogin($_POST['login_Log']));
            $isPasswordCorrect = password_verify($_POST['password_Log'], $thisAdherent->getPassword());
            if ($isPasswordCorrect){
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
                if ($thisAdherent->getIdRole() >= 2) {
                    $user_level = 2;
                }
                if ($thisAdherent->getIdRole() >=6){
                    $user_level = 3;
                }
                $_SESSION['user_level'] = $user_level;
                $message_log = "Bravo " . $prenom . " " . $nom . " vous êtes connecté ";
                $page = $homepage;
            }
            else{
                $message_log ="Mauvais mot de passe";
            }
        } else {
            $message_log = "Mauvais identifiant";
            $page = $homepage;
            sleep(1);
        }
    }
}
