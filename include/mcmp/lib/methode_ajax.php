<?php
//démarage des sessions

//mon fichier config PDO, base de données
include('../../../config/config.php');
include('./mcmp_function.php');
$msg = array();
if(isset($_POST['sendmail']) && $_POST['sendmail'] == 1) {
    $msg['modal'] = sendMail($_POST['name'], $_POST['email'], $_POST['message']);
}else{
    $msg['modal'] = 'Vous n\'etes pas authorisé à appeller cette methode.';
}
//return valeur json/Ajax
echo json_encode($msg);