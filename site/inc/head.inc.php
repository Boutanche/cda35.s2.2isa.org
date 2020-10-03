<!Doctype html>
<html>
<head>
    <title>Mon Site Test</title>
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>inc/css/style.css">
</head>
<body>
<header>
    <div class="conteneur">
        <div>
            <a href="" title="Mon Site Test">MonSiteTest</a>
        </div>
        <nav>
            <?php
            if(internauteEstConnecteEtEstAdmin())
            {
                echo '<a href="' . RACINE_SITE . 'admin/gestion_membre.php">Gestion des membres</a>';
                echo '<a href="' . RACINE_SITE . 'admin/gestion_activité.php">Gestion des activités</a>';
                echo '<a href="' . RACINE_SITE . 'admin/gestion_nouvelle.php">Gestion des nouvelles</a>';
            }
            if(internauteEstConnecte())
            {
                echo '<a href="' . RACINE_SITE . 'page/profil.php">Voir votre profil</a>';
                echo '<a href="' . RACINE_SITE . 'page/blog.php">Accès aux nouvelles</a>';
                echo '<a href="' . RACINE_SITE . 'page/my_act.php">Voir vos activités</a>';
                echo '<a href="' . RACINE_SITE . 'page/connexion.php?action=deconnexion">Se déconnecter</a>';
            }
            else
            {
                echo '<a href="' . RACINE_SITE . 'page/inscription.php">Inscription</a>';
                echo '<a href="' . RACINE_SITE . 'page/connexion.php">Connexion</a>';
                echo '<a href="' . RACINE_SITE . 'page/blog.php">Accès aux nouvelles</a>';
                echo '<a href="' . RACINE_SITE . 'page/my_act.php">Voir vos activités</a>';
            }
            ?>
        </nav>
    </div>
</header>
<section>
    <div class="conteneur">