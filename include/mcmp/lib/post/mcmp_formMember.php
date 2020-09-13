<?php
require_once './lib/manager/AdherentDAO.php';
if(empty($_POST["nom"]) || empty($_POST["prenom"])){
    $messageAdmin_FormMember = 'Vous devez saisir un nom et un prénom';
}else {
    $ar_adherent = array();
    //encrypt : password :
    $hash_pass = password_hash($_POST["user_password"], PASSWORD_DEFAULT);
    $ar_adherent = ([
        'idAdherent' => null,
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'dNaiss' => $_POST['dnaiss'],
        'addr1' => $_POST['adresse1'],
        'cdPost' => $_POST['cdpost'],
        'ville' => $_POST['ville'],
        'email' => $_POST['email'],
        'tel' => $_POST['tel'],
        'dAdhesion' => $_POST['dadhesion'],
        'login' => $_POST['login'],
        'password' => $hash_pass,
        'idPhoto' => null,
        'idRole' => $_POST['role']
    ]);
    $adherent = new Adherent($ar_adherent);
    $daoAdherent = new AdherentDAO($bdd);
    //TODO : Vérifier unicité du login
    if ($daoAdherent->exists_Log($adherent->getLogin())) {
        $messageAdmin_FormMember = "Le Login de ce membre existe déjà";
    }
    else {
        $messageAdmin_FormMember = "Login_ OK ";
        //TODO : Augmenter la sécurité en augmentant la difficulté du mp:
        if ($_POST['user_password'] == $_POST['confirm_password']) {
            $daoAdherent->add($adherent);
            $messageAdmin_FormMember = "Formulaire Ajouter Adhérent Envoyé";
        } else {
            $messageAdmin_FormMember = "Mot de passe doit être identique dans les deux champs de saisie : ";
        }
    }
}

