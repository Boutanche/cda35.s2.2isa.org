<?php
include ('./include/mcmp/lib/mcmp_function.php');
$dest = $_POST['user_mail'];
$objet = $_POST['user_object'];
$contenu = $_POST['user_message'];
$emeteur = $_POST['user_name'];
Mi_Mail($dest,$emeteur, $objet,$contenu);