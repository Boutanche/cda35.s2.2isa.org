<?php
//Ne fonctionne pas : ? Question : Pourquoi ? Et pourquoi on l'a pas vu ?
//Est ce que c'est obsololéte, dépassé, non-sécuritaire ?
$username = 'benoit';
$password = 'benoit01';

if (isset($_SERVER['PHP_AUTH_USER']) &&  isset($_SERVER['PHP_AUTH_PW']))
{
    echo
        "Bienvenue, <br> Utilisateur : "    . htmlspecialchars($_SERVER['PHP_AUTH_USER']) .
        "<br>Mot de passe : "               . htmlspecialchars($_SERVER['PHP_AUTH_PW']);
    if ($_SERVER['PHP_AUTH_USER'] === $username && $_SERVER['PHP_AUTH_PW'] === $password)
        echo 'Vous êtes connecté';
    else die ("Nom d'utilisateur ou mot de passe non valide.");
}
else {
    header('WWW-Authenticate : Basic realm = "Zone restreinte"');
    header('HTTP/1.0 401 unauthorized');
    die ("Entrez votre nom d'utilisateur et votre mot de passe.");
}
?>

