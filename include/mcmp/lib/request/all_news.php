<?php
//$ThisNewsJson = array();
$post_News = $bdd->query('SELECT * FROM mcmp_article');
$ar_News = array();
while ($data = $post_News->fetch()) {
    $ar_News[$data['IdArticle']] = $data;
}

