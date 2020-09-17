<?php
//TODO : C'est pas CRLF + XSS QUI NE FONCTIONNE PAS... C'est que je passe par Ajax.
//TODO : SUPPRIMER CE FICHIER QUI SERT A RIEN.
include ('./include/mcmp/lib/mcmp_function.php');
$dest = htmlspecialchars(str_replace('\n', '',$_POST['user_mail']));
$objet = htmlspecialchars(str_replace('\n', '',$_POST['user_object']));
$contenu = htmlspecialchars(str_replace('\n', '',$_POST['user_message']));
$emeteur = htmlspecialchars(str_replace('\n', '',$_POST['user_name']));


//Mi_Mail($dest,$emeteur, $objet,$contenu);