<?php
//démarage des sessions

//mon fichier config PDO, base de données
include('../../../config/config.php');
include('./mcmp_function.php');
$msg = array();
/*
if($user_level == 2){
    if(!empty($_POST)) {
        if (isset($_POST['informations']) && $_POST['informations'] == 1) {
            if(isset($_POST['description']) && !empty($_POST['description'])){
                $query = 'INSERT INTO nouvelle(
                Titre,
                Texte
                ) VALUES (
                "'.$_POST["title"].'",
                "'.$_POST["description"].'"
            )';
                $bdd->query($query);
                //$bdd->lastInsertId() recupere l'id créé automatiquement
                $donnees['IdNouvelle']= $bdd->lastInsertId();
                $donnees['Titre'] = $_POST["title"];
                //mise en variable d'un template
                ob_start();
                include('../includes/tmpl/news_breadcrumb.php');
                $tmpl = ob_get_clean();
                $msg['modal'] = 'Ajout d\'une nouvelle.';
                $msg['tmpl'] = $tmpl;
            }
        }
    }
*/
if(isset($_POST['sendmail']) && $_POST['sendmail'] == 1) {
    $msg['modal'] = sendMail($_POST['name'], $_POST['email'], $_POST['message']);
}else{
    $msg['modal'] = 'Vous n\'etes pas authorisé à appeller cette methode.';
}
//return valeur json/Ajax
echo json_encode($msg);