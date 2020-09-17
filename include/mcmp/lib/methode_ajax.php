<?php
//démarage des sessions

//mon fichier config PDO, base de données
include('../../../config/config.php');
include('./mcmp_function.php');
$msg = array();
if(isset($_POST['sendmail']) && $_POST['sendmail'] == 1) {
    $dest = htmlspecialchars(str_replace('\n', '',$_POST['email']));
    $objet = htmlspecialchars(str_replace('\n', '',$_POST['message']));
    //$contenu = htmlspecialchars(str_replace('\n', '',$_POST['user_message']));
    $emeteur = htmlspecialchars(str_replace('\n', '',$_POST['name']));
    $msg['modal'] = sendMail($emeteur, $dest, $objet);
}else{
    $msg['modal'] = 'Vous n\'etes pas authorisé à appeller cette methode.';
}
//return valeur json/Ajax
echo json_encode($msg);