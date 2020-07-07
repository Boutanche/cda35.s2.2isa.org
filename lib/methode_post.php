<?php
//test de la super global $_POST si elle n'est pas vide '!empty()'
if(!empty($_POST)){

    if (isset($_POST['formulaire']) && $_POST['formulaire'] == 'register'){
        var_dump($_POST);
        /*
        */
        $query = 'INSERT INTO adherent(
            Nom,
            Prenom,
            DNaiss,
            Adresse1,
            CdPost,
            Ville,
            Email,
            Tel
            ) VALUES (
            "'.$_POST["nom"].'",
            "'.$_POST["prenom"].'",
            "'.$_POST["dnaiss"].'",
            "'.$_POST["adresse1"].'",
            "'.$_POST["cdpost"].'",
            "'.$_POST["ville"].'",
            "'.$_POST["email"].'",
            "'.$_POST["tel"].'"
            )';
        echo "Query : ".$query;
        $bddovh->query($query);
    }

    if (isset($_POST['invite']) && $_POST['invite'] == 'inviteform'){
        if(isset($_POST['pseudo']) AND isset($_POST['password'])) {
            //je teste si j'ai des données dans les $_POST
            if (!empty($_POST['pseudo']) and !empty($_POST['password'])) {
                $query = 'SELECT IdAdherent, Nom, Prenom FROM adherent WHERE Login = "'. $_POST['pseudo'] . '" AND Password = "' . $_POST['password'] . '"';
                $reponse = $bddovh->query($query);
                //permet de déterminer le nombre d'enregistrement
                if ($reponse->rowCount() == 1) {
                    //boucle les données récupérées
                    while ($donnees = $reponse->fetch()) {
                        $nom = $donnees['Nom'];
                        $prenom = $donnees['Prenom'];
                        $_SESSION['id_adherent'] =  $donnees['IdAdherent'];
                        $_SESSION['nom'] = $nom;
                        $_SESSION['prenom'] = $prenom;
                        $message_modal = "Bravo ".$prenom." ".$nom." vous êtes connecté!";
                    }
                } else {
                    $message_modal = "Identifiant ou mot de passe invalide!";
                };
            }
        }
    }
}