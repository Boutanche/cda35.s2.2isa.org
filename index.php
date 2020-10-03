<?php

//*************************************************************
//*************************************************************
//********//CODE DE LA PAGE INDEX.PHP RACINE DU SITE//*********
//*************************************************************
//*************************************************************
//insertion de la base de données hébergée sous OVH.
include('./config/config.php');
    //TODO Bug FIX TEST DE NON REGRESSION//
    //TODO : Depuis la mise en place du By pass, Obligation de reconnexion après modification d'une news.
    //Benoit par en vacances pensez à vous en occupper !
    //Demander à Sébastien Lambin, visiblement il a trouvé le truc.
    if ($connect == true) {
        //**************************************//
        //Cookie Ticket pour sécurité le ByPass :
        //**************************************//
        $cookie_name = "ticket";
        // On génère quelque chose d'aléatoire
        $ticket = session_id().microtime().rand(0,999);
        // on hash pour avoir quelque chose de propre qui aura toujours la même forme
        $ticket = hash('sha512', $ticket);
        // On enregistre des deux cotés
        setcookie($cookie_name, $ticket, time() + (60 * 20)); // Expire au bout de 20 min
        $_SESSION['ticket'] = $ticket;
        //************************************//
        //Fin de gestion du Cookie sécurité :
        //************************************//
        //$time = time(); // get current timestamp
        //$token = sha1($time); // create the token
        //$_SESSION['token'] = $token; // store the token in session var
        //$_SESSION['tokenTime'] = $time; // store the time of token generation in session var
    }
    /**
     * Projet Fil Rouge : Moto Club Millau Passion :
     * Le but de ce projet et de démontrer mes compétence et ma compréhension des enjeux du développement web.
     * Ce projet ne refléte pas mes compétences actuelles et comporte de nombreux tests et mise en applications des TP.
     * Ce site fonctionnel est mis en production fonctionne de manière à répondre au cahier des charges.
     * Il est le reflet de ce qu'on nous demande de valier à Jalon 2 _ Acticité 1 des compétences :
     * Concevoir et Développer les composants d'interface utilisateur en intégrant les recommandations de sécurité.
    **/
    //*************************************************************
    //*************************************************************
                //QUESTIONS POUR LES FORMATEURS //
                   //OU SI VOUS VOYEZ CE CODE//
              //contact : benoit.bertrand@2isa.org//
    //*************************************************************
    //*************************************************************
    //Liste des questions qui me sont venus en cours de développement et dont je n'ai pas de réponses :
    //par default la page d'accueil d'un site web s'appelle index.
    // ici son extension est .php, Mais elle pourrait être .html sur un site statique.
    //?? QUESTION 1 : THEORIQUE : POURQUOI l'APPELLER : INDEX ??
            /*
             * La page d'affichage par défaul affichée par le navigateur dépend du système d'exploitation il n'est pas
             * identique sous Linux ou Windows. Je n'ai pas trouvé une raison plus qu'un autre de nommer cette page par défaut
             * autrement que index : elle pourrait s'appeller : -default, -home, et fonctionnerait tout autant.
             * Cependant il semble que -index soit le plus utilisé et même si je n'ai rien trouvé démontrant qu'il s'agissait d'une norme.
             * Le fait que ce soit trés généralisé me laisse penser que de fait, pratiquement personne ne fait autrement.
             * Mais j'ai quand même effectué un test en renommant ma page par "défaut", "default", "home" et tout fonctionnait correctement.
            */
    //?? QUESTION 2 : JE N'AI PAS COMPRIS : POURQUOI R'APPELLER : CONFIG OU SESSION ??
            /*
             * J'ai besoin d'un approfondissement :
             * Sur mes méthodes AJAX je rappelle mon fichier config.php
             * Et je rappelle session_start.
             * Cela fonctionne mais je ne comprends pas pouquoi, alors que je passe par index.php (root)
             * Pourquoi il faut le rappeller sur ces fichiers.
             * J'ai enlevé pour tester... ça fonctionne quand même...
             * Pas compris... Est ce que c'est une piste pour le soucis By Pass ?
            */

    //mes librairies PHP :
    //TODO : Effectuer un découpage plus pertient.
    //En fait non !!! J'ai essayé et fais des tests de MVC.
    //****************************************************************
    //Il n'est pas demandé sur ce jalon d'organiser le code :
    //****************************************************************
    //J'ai testé Symfony 5 (sécurité ++)
    //J'ai testé un design pattern DAO (maintenabilité ++)
    //Ce n'est pas demandé dans ce Jalon.
    //Seul l'entity : Adhérent.php est implémentée : et son manager AdherentDAO.php
    //Vu que ce n'est pas une compétence de ce jalon est géré "php à l'ancienne"
    //*****************************************************************
    //INCLUDE DE LA GESTION DES GET ET POST RECUPERATIONS DES DONNEES :
    //*****************************************************************
    //Gestion des formulaire type $_GET : Dans un repertoire avec un index pour centraliser :
    //ATTENTION // DUPLICATION DU CODE // NE PAS REFAIRE :
    //DANGER MAINTENABILITE DU SITE :
    include('./include/mcmp/lib/post/index.php');
    include('./include/mcmp/lib/get/index.php');
    //TODO : Revoir le découpage. Supprimer les parties innutiles.
    //*****************************************************************
    //INCLUDE DU FRONT GESTION DE L'AFFICHAGE POUR L'UTILISATEUR :
    //*****************************************************************
    //Le Head : les balises meta : insertion css :
    include ('./include/mcmp/layout/head.php');
    //Le Preloader
    //Chargement de l'ensemble de la page :
    include ('./include/mcmp/layout/preloader.php');
    //Le Header : navDynamique.php dans --module.
    include('./include/mcmp/tmpl/header.php');
    //*****************************************************************
    //ARBORESCENCE :
    //TODO : Nettoyer : Enlever les fichiers innutiles :
    // -Root :
    // -Assets :
    //      -- css (mon css -- sass)
    //      -- js (mon js)
    // -img (mes images)
    //      -- upload :
    //          -- galerie (Images ajoutées depuis "Galerie")
    //          -- news (Images ajoutée depuis News)
    // -include :
    //      -- mcmp
    //          -- layout (Footer et Header)
    //          -- lib (Footer et Header)
    //              -- entity (table : objet)
    //              -- manager (connexion bdd : dao)
    //              -- get : index.methodes get
    //              -- post : index.methodes post
    //              -- resquest : récupération des données.
    //          -- mcmp_admin (accès administration)
    //          -- mcmp-page (page.php)
    //          -- module (php dynamique)
    //          -- tmpl (templates HTML)
    //*****************************************************************
    //*****************************************************************
    // - poubelle : (code obsoléte)
    //*****************************************************************
    //*****************************************************************
    //Ici ma page specifique : Redirection .htaccess :
    include('./include/mcmp/mcmp_page/'.$page.'.php');
    //Footer : Appel des scripts JS :
    include('./include/mcmp/layout/footer.php');