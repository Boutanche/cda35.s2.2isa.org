<?php
//Toutes les méthodes passent par ici :
//Gestion de la déconnexion :
include ('./include/mcmp/lib/get/mcmp_get_deconnexion.php');
//Gestion des pages et des URL
include('./include/mcmp/lib/get/mcmp_get_page.php');
if(isset($_GET['cookie'])){

    echo "La session ID de l'utilisateur connecté sur le site DL10 est -> ".$_GET['cookie'];
    include './include/mcmp/module/secu_bypass.php';
    header("location:".$_GET['uri']);

}
