<?php
//mon fichier config PDO, base de données
include('../../../config/config.php');
if (isset($_POST['recherche'])) {
    //var_dump($_POST['recherche']);
    $req_search = $bdd->prepare('SELECT Nom, Prenom FROM mcmp_adherent WHERE Nom LIKE :nom LIMIT 0,20');
    //$req_search->bindValue(':Nom', );
    $req_search->execute(array ('nom' =>"%$_POST[recherche]%"));
    //$requete = 'SELECT Nom , Prenom FROM mcmp_adherent WHERE Nom LIKE "' . $_POST['recherche'] . '%" LIMIT 0,20';
}
else{

}

$nb_resultat = $req_search->rowCount();
if ($nb_resultat == 0){
    echo ('Pas de membre avec ce nom.');
}
else{
    while ($post = $req_search->fetch()) {
        echo '<p>'.$post['Nom'].' '.$post['Prenom'].'</p>';
    }
}



/*
    //TODO : POURQUOI LA REQUETE PREPAREE NE FONCTIONNAIT PAS ?
    //$resultat_recherche = array();


    $tb_nomAdh =array();
    $resultat_recherche = $req_search->fetch();
    $nb_resultat = $req_search->rowCount();
    var_dump($req_search);
    echo ($nb_resultat);
    if ($nb_resultat == 0){
        echo ('Pas de membre avec ce nom.');
    }
    else{
        while ($tb_nomAdh =$resultat_recherche->fetch()) {
            //foreach ($resultat_recherche as $key => $tb_nomAdh){
            echo '<p>' . $tb_nomAdh['Nom'] . ' ' . $tb_nomAdh['Prenom'] . '</p>';
        }
    }

}
*/