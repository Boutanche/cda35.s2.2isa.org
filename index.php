<?php
    /*
     * Projet Fil Rouge : Moto Club Millau Passion :
     * Le but de ce projet et de démontrer mes compétence et ma compréhension des enjeux du développement web.
     * Ce projet refléte plus mes capacités actuelles et comporte de nombreux tests et applications des TP.
    */
    //Lancement de la prise en compte des sessions.
    session_start();
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
    //TODO : Effectuer un découpage plus pertient.
        //Gestion des formulaire type $_POST
        //TODO : Se renseigner sur l'architecture MVC.
        include('./lib/methode_post.php');
        //TODO : J'appelle sur toutes mes pages l'ensemble des requêtes. à Modifier pour l'efficacité.
        //Gestion des formulaire type $_GET
        include('./lib/methode_get.php');
    //Encore dans le doute de la structure finale :
    //Découpage "détaillé" au cas je ne réutilise pas tout, partout.
    //TODO : Revoir le découpage. Supprimer les parties innutiles.
        //Le Head
        include ('./include/layout/head.php');
        //Le Preloader
        include ('./include/layout/preloader.php');
        //Le Header
        include('./include/layout/header.php');
        //ici ma page specifique
        include('./include/page/'.$page.'.php');
        //ici mon footer
        include('./include/layout/footer.php');