<?php
session_start();
//Lancement de la prise en compte des sessions.
    /*
     * Projet Fil Rouge : Moto Club Millau Passion :
     * Le but de ce projet et de démontrer mes compétence et ma compréhension des enjeux du développement web.
     * Ce projet refléte plus mes capacités actuelles et comporte de nombreux tests et applications des TP.
    */
    //par default la page d'accueil d'un site web s'appelle index ici son extension est .php
    /*
     * La page d'affichage par défaul affichée par le navigateur dépend du système d'exploitation il n'est pas
     * identique sous Linux ou Windows. Je n'ai pas trouvé une raison plus qu'un autre de nommer cette page par défaut
     * autrement que index : elle pourrait s'appeller autrement. -default, -home, et fonctionnerait tout autant.
     * Cependant il semble que -index soit le plus utilisé et même si je n'ai rien trouvé démontrant qu'il s'agissait d'une norme.
     * Le fait que ce soit tré généralisé me laisse penser que de fait, pratiquement personne ne fait autrement.
     * Mais j'ai quand même effectué un test en renomant ma page par défaut, "default" et tout fonctionnait correctement.
    */
    //insertion de la base de données hébergée sous OVH.
    include('./config/config.php');
    //mes librairies PHP :
    //Effectuer un découpage plus pertient.
    //En fait non !!! J'ai essayé et fais des tests de MVC.
    //J'ai testé Symfony
    //J'ai testé un design pattern DAO
    //Ce n'est pas demandé dans ce Jalon.
        //Gestion des formulaire type $_POST
    //*****************************************************************
    //INCLUDE DE LA GESTION DES GET ET POST RECUPERATIONS DES DONNEES :
    //*****************************************************************
        include('./include/mcmp/lib/post/index.php');
        //TODO : J'appelle sur toutes mes pages l'ensemble des requêtes. à Modifier pour l'efficacité.
        //Gestion des formulaire type $_GET
        include('./include/mcmp/lib/get/index.php');
    //Encore dans le doute de la structure finale :
    //Découpage "détaillé" au cas je ne réutilise pas tout, partout.
    //TODO : Revoir le découpage. Supprimer les parties innutiles.
    //*****************************************************************
    //INCLUDE DU FRONT GESTION DE L'AFFICHAGE POUR L'UTILISATEUR :
    //*****************************************************************
        //Le Head
        include ('./include/mcmp/layout/head.php');
        //Le Preloader
        include ('./include/mcmp/layout/preloader.php');
        //Le Header
        include('./include/mcmp/tmpl/header.php');
        //Ici ma page specifique
        //J'organise un minimum mon site :
        //L'affichage HTML dans "tmpl".
        //PHP dans "page"
        include('./include/mcmp/mcmp_page/'.$page.'.php');
        //ici mon footer
        include('./include/mcmp/layout/footer.php');