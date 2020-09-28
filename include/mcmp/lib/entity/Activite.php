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
    //TODO : Une List de Getters
    public function getIdAct()
    {
        return $this->_idAct;
    }
    public function getTitre()
    {
        return $this->_tire;
    }
    public function getDDebut()
    {
        return $this->_dDebut;
    }
    public function getDFin()
    {
        return $this->_dFin;
    }
    //TODO : Une List de Setter
}
