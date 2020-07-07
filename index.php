<?php
    session_start();
    //par default ma page d'accueil : index.php
    //insertion base de données OVH.
    include('./config/config.php');
    //mes librairies PHP
        //Gestion des formulaire type $_POST
        include('./lib/methode_post.php');
        //Gestion des formulaire type $_GET
        include('./lib/methode_get.php');
    //Encore dans le doute de la structure finale :
    //Découpage "détaillé" au cas je ne réutilise pas tout, partout.
    //Le Head
    include ('./include/layout/head.php');
    //Le Preloader
    //include ('./include/layout/preloader.php');
    //Le Header
    include('./include/layout/header.php');
    //ici ma page specifique
    include('./include/page/'.$page.'.php');
    //ici mon footer
    include('./include/layout/footer.php');