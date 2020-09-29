<?php
require_once './include/mcmp/lib/entity/Activite.php';

class ActiviteDAO
{
    //Instance de PDO :
    private $_bdd;
    //Constructeur :
    public  function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    //Ajouter un adhérent dans la bdd.
    public function add(Activite $activite){
        $req_InsertAct = $this->_bdd->prepare('
        INSERT INTO mcmp_activite (IdAct, Titre, DDebut, DFin, Description, Detail, TarifAdh, TarifInv, DLimite, IdAdh, IdType)
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

    function find(){
        $activites = Array();
        $req_allAct = $this->_bdd->prepare('SELECT * FROM mcmp_activite');
        $req_allAct->execute();

        while ($data = $req_allAct->fetch(PDO::FETCH_ASSOC)){
            array_push($activites, new Activite($data));
        }

        return $activites;
    }

    /**
     * Trouver une activité par son identifiant unique
     * @param $id integer Identifiant unique
     * @return Activite Activite or null if not found
     */
    function findById($id) : ?Activite{
        if($id < 0 ) {
            return  null;
        }

        $activite = null;
        $req_allAct = $this->_bdd->prepare('SELECT * FROM mcmp_activite where IdAct = :id');
        $req_allAct->execute(array(
            "id" => $id
        ));

        $activite = new Activite($req_allAct->fetch(PDO::FETCH_ASSOC));

        return $activite;
    }

    /**
     * Supprimer une activité par son identifiant unique
     * @param $id integer Identifiant unique
     * @return boolean Succes or not
     */
    function delete($id) {
        if($id < 0 ) {
            return  null;
        }
        $req_allAct = $this->_bdd->prepare('DELETE FROM mcmp_activite where IdAct = :id');
        return $req_allAct->execute(array(
            "id" => $id
        ));
    }

    /**
     *  Mettre
     * @param Activite $activite
     * @return Activite|null
     */
    function update(Activite $activite) : ?Activite {
        if($activite->getIdAct() != null && $activite->getIdAct() < 0) {
            return  null;
        }

        $req_InsertAct = $this->_bdd->prepare('
        UPDATE 
            mcmp_activite 
        set 
            idAct = :idAct,
            Titre = :titre,
            DDebut = :dDebut,
            DFin = :dFin,
            Description = :descritpion,
            Detail = :detail,
            TarifAdh = :tarifAdh,
            TarifInv = :tarifInv,
            DLimite = :dLimite,
            IdAdh = :idAdh,
            IdType = :idType'
        );
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
        $success = $req_InsertAct->execute();

        if($success) {
            return $this->findById($activite->getIdAct());
        }
        else {
            return  null;
        }
    }


}