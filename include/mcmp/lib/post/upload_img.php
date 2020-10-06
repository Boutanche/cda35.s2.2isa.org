<?php
if (0 == $_FILES['news_img']['error']){
    //varialbles de configuration :
    //echo ('coucou');
    $limitSize = 2097152;//limitte taille du fichier
    $validExtention = array('png', 'jpeg', 'jpg', 'gif');
    $fileSize = $_FILES['news_img']['size'];
    $today = date("Y:m:d");
    //déplacer le fichier
    $upload_news_img = 'img/upload/galerie/';
    $img_info = new SplFileInfo($_FILES['news_img']['name']);
    $extension = $img_info->getExtension();
    $new_img = $_POST['name_img'].'.'.$extension;
    if (in_array($extension, $validExtention)) {
        if ($limitSize > $fileSize) {
            move_uploaded_file($_FILES['news_img']['tmp_name'], './'.$upload_news_img.$new_img);
            $req_insertimg_news = $bdd->prepare(
                'INSERT INTO mcmp_photo (Titre, DPhoto, Adresse, IdAdh, Extension) 
                          VALUES ( :titre, :dphoto, :adresse, :idadherent, :extension)');
            $result = $req_insertimg_news->execute(array(
                //TODO : add fonction time() Pour sécurité.
                'titre' => $_POST['name_img'],
                'dphoto' => $today,
                'adresse' => $upload_news_img,
                'idadherent' => $_SESSION['id_adherent'],
                'extension' => $extension
                //TODO : NE PAS CONFONDRE ACTIVITE ET LES NEWS :
                //'idactivite' => 12//,$_POST['news_id']
                //Je n'ai pas besoin de code pour les photos : le fichier où j'enregistre détermine le type de photo au final
                //TODO : Modification du MCD
                //'code' => 1 ));
            ));
            //echo "Résultat de la requête  : ".var_dump($result)."<br>";
        }else{
            //fichier trop grand.
        }
    }else{
        //Extension non valide.
    }
}else{
    //Il n'y a pas de fichier là dedans :
}