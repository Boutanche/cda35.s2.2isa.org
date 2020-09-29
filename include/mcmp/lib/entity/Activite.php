<?php


class Activite
{
    private $_idAct;
    private $_titre ;
    private $_dDebut;
    private $_dFin;
    private $_description;
    private $_detail;
    private $_tarifAdh;
    private $_tarifInv;
    private $_dLimite;
    private $_idAdh;
    private $_idType;

    public function __construct(Array $data)
    {
        $this->hydrate($data);
    }
    public function hydrate(Array $data)
    {
        foreach ($data as $key => $value){
            $methode = 'set'.ucfirst($key);
            if(method_exists($this, $methode)){
                $this->$methode($value);
            }
        }
    }
    public function dehydrate(Activite $activite)
    {
        foreach ($activite as $key => $value){
            $methode = 'get'.ucfirst($key);
            if(method_exists($this, $methode)){
                $this->$methode($value);
            }
        }
    }
    //Une List de Getters
    public function getIdAct()
    {
        return $this->_idAct;
    }
    public function getTitre()
    {
        return $this->_titre;
    }
    public function getDDebut()
    {
        return $this->_dDebut;
    }
    public function getDFin()
    {
        return $this->_dFin;
    }
    public function getDescription()
    {
        return $this->_description;
    }
    public function getDetail()
    {
        return $this->_detail;
    }
    public function getTarifAdh()
    {
        return $this->_tarifAdh;
    }
    public function getTarifInv()
    {
        return $this->_tarifInv;
    }
    public function getDLimite()
    {
        return $this->_dLimite;
    }
    public function getIdAdh()
    {
        return $this->_idAdh;
    }
    public function getIdType()
    {
        return $this->_idType;
    }
    //TODO : Une List de Setter
    public function setIdAct($id): void
    {
        $this->_idAct= $id;
    }
    public function setTitre($titre): void
    {
        $this->_titre= $titre;
    }
    public function setDDebut($dDebut) : void
    {
        $this->_dDebut= $dDebut;
    }
    public function setDFin($dFin): void
    {
        $this->_dFin = $dFin;
    }
    public function setDescription($description): void
    {
        $this->_description = $description;
    }
    public function setDetail($detail): void
    {
        $this->_detail = $detail;
    }
    public function setTarifAdh($tarifAdh): void
    {
        $this->_tarifAdh = $tarifAdh;
    }
    public function setTarifInv($tarifInv): void
    {
        $this->_tarifInv = $tarifInv;
    }
    public function setDLimite($dLimite): void
    {
        $this->_dLimite = $dLimite;
    }
    public function setIdAdh($idAdh): void
    {
        $this->_idAdh = $idAdh;
    }
    public function setIdType($idType): void
    {
        $this->_idType = $idType;
    }
}
