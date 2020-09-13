<?php
$allMembers = $bdd->query('SELECT * FROM mcmp_adherent');
$ar_adherent = array();
while ($data_members = $allMembers->fetch()){
    $ar_adherent[$data_members['IdAdherent']] = $data_members;
}
