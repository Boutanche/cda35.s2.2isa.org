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
                 * Je voulais Récupérer l'ID de l'adhérent :
                 * Il y a visiblement un soucis ici :
                 * ------------------------------------------
                 * ------------------------------------------
                        //TODO : Régler le pbm : $ThisIdAdherent = Null :
                        echo "Coucou";
                        echo $prenom;
                        echo $thisAdherent->getIdAdherent();
                        $idConnected = $thisAdherent->getIdAdherent();
                -------------------------------------------*/
                /* ------------------------------------------
                 * Contournement du problême
                 * ------------------------------------------
                 ------------------------------------------*/
                $reqSOS = $bdd->prepare('SELECT IdAdherent FROM mcmp_adherent WHERE Login = :login');
                $reqSOS->bindValue(':login', $thisAdherent->getLogin());
                $reqSOS->execute();
                $id = $reqSOS->fetch();

                $nom = $thisAdherent->getNom();
                $prenom = $thisAdherent->getPrenom();
                $idConnected = $id['IdAdherent'];

                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['id_adherent'] = $id['IdAdherent'];
                $user_level = 1;
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
