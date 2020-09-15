<?php
//mon fichier config PDO, base de données
include('../../../config/config.php');
if (isset($_POST['recherche'])) {

    $requete = 'SELECT Nom , Prenom FROM mcmp_adherent WHERE Nom LIKE "' . $_POST['recherche'] . '%" LIMIT 0,20';
}
else{

}
$resultat =$bdd->query($requete);
$nb_resultat = $resultat->rowCount();
if ($nb_resultat == 0){
    echo ('Pas de membre avec ce nom.');
}
else{
    while ($post = $resultat->fetch()) {
        echo '<p>'.$post['Nom'].' '.$post['Prenom'].'</p>';
    }
}



