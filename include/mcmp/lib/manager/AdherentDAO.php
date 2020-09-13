<?php
require_once './include/mcmp/lib/entity/Adherent.php';
class AdherentDAO
{
    //Instance de PDO :
    private $_bdd;
    //Constructeur :
    public  function __construct($bdd)
    {
        $this->setBdd($bdd);
    }
    //Ajouter un adhérent dans la bdd.
    public function add(Adherent $adherent){
        //Preparation de la requête d'insertion :
        $req_InsertAdh = $this->_bdd->prepare('
            INSERT INTO mcmp_adherent (IdAdherent, Nom, Prenom, DNaiss, Addr1, CdPost, Ville, Email, Tel, DAdhesion, Login, Password, IdRole)
            VALUES(:id,:nom, :prenom, :dnaiss, :addr1, :cdpost, :ville, :email, :tel, :dadhesion, :login, :password, :idrole)');
        //requête insert :
        $req_InsertAdh->bindValue(':id', $adherent->getIdAdherent());
        $req_InsertAdh->bindValue(':nom', $adherent->getNom());
        $req_InsertAdh->bindValue(':prenom', $adherent->getPrenom());
        $req_InsertAdh->bindValue(':dnaiss', $adherent->getDNaiss());
        $req_InsertAdh->bindValue(':addr1', $adherent->getAddr1());
        $req_InsertAdh->bindValue(':cdpost', $adherent->getCdpost());
        $req_InsertAdh->bindValue(':ville', $adherent->getVille());
        $req_InsertAdh->bindValue(':email', $adherent->getEmail());
        $req_InsertAdh->bindValue(':tel', $adherent->getTel());
        $req_InsertAdh->bindValue(':dadhesion', $adherent->getDadhesion());
        $req_InsertAdh->bindValue(':login', $adherent->getLogin());
        $req_InsertAdh->bindValue(':password', $adherent->getPassword());
        $req_InsertAdh->bindValue(':idrole', $adherent->getIdRole());
        //Execution de l'insert :
        $req_InsertAdh->execute();
        //return $adherent;
    }
    public function delete(Adherent $adherent){
        //Exécuter un delete sur un Adhérent :
        $req_DeleteAdh = $this->_bdd->prepare('DELETE FROM mcmp_adherent WHERE IdAdherent = '.$adherent->getIdAdherent());
        $req_DeleteAdh->execute();
    }
    public function getByID($id){
        //Exécuter un select avec une clause WHERE et return l'adhérent SELECT :
    }
    function findAll_Adh($_bdd){
        $adherents = Array();
        $req_allAdherents = $_bdd->prepare('SELECT * FROM mcmp_adherent');
        while ($data = $req_allAdherents->fetch(PDO::FETCH_ASSOC)){
            $adherents = new Adherent($data);
        }
        $req_allAdherents->execute();
    }
    function findByLogin($login){
        $ar_adherent = Array();
        $req_FindByLog_adherent =$this->_bdd->prepare('SELECT * FROM mcmp_adherent WHERE Login = :log');
        $req_FindByLog_adherent->execute([':log' => $login]);
        $ar_adherent = $req_FindByLog_adherent->fetch(PDO::FETCH_ASSOC);
        return $ar_adherent;
    }
    function findById($id) {
        $adherent = null;
        //requete
        return $adherent;
    }
    function findByEmail($email) {
        $adherent = null;
        //requete
        return $adherent;
    }
    function update($adherent){
        $adherent = null;
        //requete update
        return $adherent;
    }
    //Test si Adherent avec Login = $adherentLog existe :
    public function exists_Log($adherentLog){
        if (is_string($adherentLog)){
            $req = $this->_bdd->prepare('SELECT COUNT(*) FROM mcmp_adherent WHERE Login = :Log');
            $req->execute([':Log' => $adherentLog]);
            return (bool) $req->fetchColumn();
        }
    }
    public function thisLog_And_thisPassword($adherentLog, $adherentPass){
        $req = $this->_bdd->prepare('SELECT COUNT(*) FROM mcmp_adherent WHERE Login = :Log AND Password = :Pass');
        $req->execute([
            ':Log' => $adherentLog,
            ':Pass' => $adherentPass]);
        return (bool) $req->fetchColumn();
    }
    public function ThisLog_GetPass($adherentLog){
        $req = $this->_bdd->prepare('SELECT Password FROM mcmp_adherent WHERE Login = :Log');
        $data = $req->execute([':Log' => $adherentLog]);
        return $data;
    }
    public function setBdd(PDO $bdd){
        $this->_bdd = $bdd;
    }
}