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
        $req_InsertAdh = $this->_bdd->prepare('
        INSERT INTO mcmp_adherent (IdAct, Titre, DDebut, DFin, Description, Detail, TarifAdh, TarifInv, DLimite, IdAdh, IdType)
        VALUES(:idAct,:titre, :dDebut, :dFin, :description, :detail, :tarifAdh, :tarifInv, :dLimite, :idAdh, :idType)');

    }
}