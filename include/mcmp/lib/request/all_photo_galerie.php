<?php
//$ThisNewsJson = array();
$post_Photo_Galerie = $bdd->query('SELECT * FROM mcmp_photo WHERE Adresse LIKE "img/upload/galerie/"');
$ar_Galerie = array();
while ($data = $post_Photo_Galerie->fetch()) {
    $ar_Galerie[$data['IdPhoto']] = $data;
}

