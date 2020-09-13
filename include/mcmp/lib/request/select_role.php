<?php
//TODO : Utiliser POO et Pattern DAO Pour Role : Entité _ Repo
$ar_role = array();
//Requete sur la table mcmp_page :
$req_role = $bdd->query('SELECT * FROM mcmp_role');

while ($data_role = $req_role->fetch()){
    $ar_role[$data_role['IdRole']] = $data_role;
}
