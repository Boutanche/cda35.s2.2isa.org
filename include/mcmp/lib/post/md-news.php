<?php
$today = date("Y:m:d");
$code = 1;
$idphoto =  null;
$idfichier = null;
$req_modify_article = $bdd->prepare
    ('UPDATE mcmp_article SET 
                         Titre = :titre,
                         Description = :description,
                         Detail = :detail, 
                         DPubli = :dpubli, 
                         Code = :code, 
                         IdAdh = :idadh, 
                         IdPhoto = :idphoto, 
                         IdFichier = :idfichier
                     WHERE 
                        IdArticle = :idarticle'
    );
$req_modify_article->bindParam(':idarticle', $_POST['IdArticle']);
$req_modify_article->bindParam(':titre', $_POST['md_title']);
$req_modify_article->bindParam(':description', $_POST['md_description']);
$req_modify_article->bindParam(':detail', $_POST['md_detail']);
$req_modify_article->bindParam(':dpubli', $today);
$req_modify_article->bindParam(':code', $code);
$req_modify_article->bindParam(':idadh', $_SESSION['id_adherent']);
$req_modify_article->bindParam(':idphoto', $idphoto );
$req_modify_article->bindParam(':idfichier', $idfichier);
$req_modify_article->execute();

