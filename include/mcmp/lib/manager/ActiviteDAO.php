<?php
require_once './include/mcmp/lib/entity/Activite.php';

class ActiviteDAO
{
    //Instance de PDO :
    private $_bdd;
    //Constructeur :
    public  function __construct($bdd)
    {
        $this->setBdd($bdd);
    }
    //Ajouter un adhérent dans la bdd.
    public function add(Activite $activite){
        $req_InsertAct = $this->_bdd->prepare('
        INSERT INTO mcmp_adherent (IdAct, Titre, DDebut, DFin, Description, Detail, TarifAdh, TarifInv, DLimite, IdAdh, IdType)
        VALUES(:idAct,:titre, :dDebut, :dFin, :description, :detail, :tarifAdh, :tarifInv, :dLimite, :idAdh, :idType)');
        //Request Insert
        $req_InsertAct->bindValue(':idAct', $activite->getIdAct());
        $req_InsertAct->bindValue(':titre', $activite->getTitre());
        $req_InsertAct->bindValue(':dDebut', $activite->getDDebut());
        $req_InsertAct->bindValue(':dFin', $activite->getDFin());
        $req_InsertAct->bindValue(':description', $activite->getDescription());
        $req_InsertAct->bindValue(':detail', $activite->getDetail());
        $req_InsertAct->bindValue(':tarifAdh', $activite->getTarifAdh());
        $req_InsertAct->bindValue(':tarifInv', $activite->getTarifInv());
        $req_InsertAct->bindValue(':dLimite', $activite->getDLimite());
        $req_InsertAct->bindValue(':idAdh', $activite->getIdAdh());
        $req_InsertAct->bindValue(':idtype', $activite->getIdType());
        //Execution de l'insert :
        $req_InsertAct->execute();
    }
    public function setBdd(PDO $bdd){
        $this->_bdd = $bdd;
    }
}