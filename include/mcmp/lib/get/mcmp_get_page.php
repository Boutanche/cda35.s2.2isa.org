<?php
//Initialisation du tableau ar_page :
$ar_page = array();
//Requete sur la table mcmp_page :

$req_page = $bdd->query('SELECT * FROM mcmp_page');

while ($data_page = $req_page->fetch()){
    $ar_page[$data_page['KeyFile']] = $data_page;
}
if (isset($_GET['page'])&& !empty($_GET['page'])){
    if(array_key_exists($_GET['page'], $ar_page)){
        $page = $_GET['page'];
    }
    else{
        $page = '404';
    }
}
//Recupération des variables PHP pour nav_dynamique.php
$title = $ar_page[$page]['MetaTitle'];
$metadescription = $ar_page[$page]['MetaDes'];
$keywords = $ar_page[$page]['Keywords'];
$h1 =  $ar_page[$page]['H1'];
$menuTitle = $ar_page[$page]['Menu'];
//Encode en UTF8 :
//$title = utf8_encode($title);
//$h1 = utf8_encode($h1);
//$menuTitle = utf8_encode($menuTitle);
//Message De connexion ??? N'a rien à faire ici...
//TODO : Bouger ce truc ailleurs.
$message_modal_admin = "Vous n'avez pas validé votre saisie";

//TODODONE : Retirer après les tests :
//var_dump($ar_page);
