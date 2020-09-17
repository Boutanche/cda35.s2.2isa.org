<?php
if (0 == $_FILES['news_img']['error']){
    //varialbles de configuration :
    $limitSize = 2097152;//votre limitte d'acception de la taille du fichier
    $validExtention = array('png', 'jpeg', 'jpg', 'gif');
    $fileSize = $_FILES['news_img']['size'];
    $today = date("Y:m:d");
    //déplacer le fichier
    $upload_news_img = './img/upload/news/';
    $img_info = new SplFileInfo($_FILES['news_img']['name']);
    $extension = $img_info->getExtension();
    $new_img = $_POST['name_img'].'.'.$extension;

    if (in_array($extension, $validExtention)) {
        if ($limitSize > $fileSize) {
            move_uploaded_file($_FILES['news_img']['tmp_name'], $upload_news_img.$new_img);
            //TODO : Upload OK
            //TODO : BUG REQUETE Ne part pas jusqu'à la BDD.
            $req_insertimg_news = $bdd->prepare('INSERT INTO photo (Titre, DPhoto, Fichier, IdAdherent, IdActivite, Code) VALUES ( :titre, :dphoto, :fichier, :idadherent, :idactivite, :code)');

            $result = $req_insertimg_news->execute(array(
                'titre' => $_POST['name_img'],
                'dphoto' => $today,
                'fichier' => $upload_news_img,
                'idadherent' => $_SESSION['id_adherent'],
                'idactivite' => 12,//$_POST['news_id'] TODO : NE PAS CONFONDRE ACTIVITE ET LES NEWS : ,
                'code' => 1 ));
            //echo "Résultat de la requête  : ".var_dump($result)."<br>";
        }else{
            //fichier trop grand.
        }
    }else{
        //Extension non valide.
    }
}else{
    //Il n'y a pas de fichier là dedans :
    var_dump($_FILES['news_img']);
}