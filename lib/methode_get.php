<?php
//Superglobal $_GET -> récupération de l'information de l'URL ? page=presentation
    //Les requêtes :
    $reponse = $bddovh->query('SELECT * FROM page');
    $testUser = $bddovh->query('SELECT * FROM invitation');
    $testAdh = $bddovh->query('SELECT * FROM adherent');
    //Initialisation de la variable tableau array() PHP
        //Pour les pages et la navbar :
        $ar_page_var = array();
        //Pour l'inscription des visiteurs :
        //Test User:
        $ar_user_var = array();
        //Test Adh :
        $ar_adh_var = array();
    //Boucle pour récupérer les données dans les tableaux :
        //Tableau $ar_page_var :
        while ($donnees = $reponse->fetch()) {
            //Ajouter les données par index à la variable $ar_page_var
            $ar_page_var[$donnees['key_file']] = $donnees;
            $ar_menu_var[$donnees['id_page']] = $donnees;
        }
        //Tableau $ar_user_var
        while ($donneesDeInvitation = $testUser->fetch()) {
            //Ajouter les données par pseudo à la variable $ar_page_var
            $ar_user_var[$donneesDeInvitation['id_invitation']] = $donneesDeInvitation;
        }
        while($donneesDeAdh = $testAdh->fetch()) {
            $ar_adh_var[$donneesDeAdh['IdAdherent']] = $donneesDeAdh;
        }
    //valeur par default de la page :
    $page = 'accueil';
//Test : Si la clef de l'url existe, si oui prend la valeur de l'information URL
//Stock dans une variable la valeur de l'url GET['page']
    if(isset($_GET['page'])&& !empty($_GET['page'])){
        //on verifie que la clef esiste bien dans mon tableau $ar_pages_var (fichier valide)
        if(array_key_exists($_GET['page'], $ar_page_var)){
            $page = $_GET['page'];
            //test sur les action de page
            if(isset($_GET['action']) && !empty($_GET['action'])){
                //est-ce que l'action c'est delete ?
                if($_GET['action'] == 'delete'){
                    //est-ce qu'on a une valeur d'id ?
                    if(isset($_GET['id']) && !empty($_GET['id'])){
                        //lancement de la requete
                        $bddovh->query('DELETE FROM adherent WHERE IdAdherent = '.$_GET['id']);
                    }
                }
            }
        }
    }
    //var_dump($ar_page_var);
    //contenu de variable en fonction de 'page'
    $title = $ar_page_var[$page]['metatitle'];
    $metadescription = $ar_page_var[$page]['metadescription'];
    $keywords = $ar_page_var[$page]['keywords'];
    $h1 = $ar_page_var[$page]['h1'];
    $menuTitre = $ar_page_var[$page]['menu'];