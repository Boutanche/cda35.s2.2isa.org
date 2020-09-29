<?php
class Adherent
{
    private $_idAdherent ;
    private $_nom ;
    private $_prenom ;
    private $_dNaiss ;
    private $_addr1 ;
    private $_cdPost ;
    private $_ville ;
    private $_email ;
    private $_tel;
    private $_dAdhesion ;
    private $_login ;
    private $_password ;
    private $_idPhoto ;
    private $_idRole ;

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
    public function dehydrate(Adherent $adherent)
    {
        foreach ($adherent as $key => $value){
            $methode = 'get'.ucfirst($key);
            if(method_exists($this, $methode)){
                $this->$methode($value);
            }
        }
    }
    //Une List de Getters
    public function getIdAdherent()
    {
        return $this->_idAdherent;
    }
    public function getNom()
    {
        return $this->_nom;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function getDNaiss()
    {
        return $this->_dNaiss;
    }
    public function getAddr1()
    {
        return $this->_addr1;
    }
    public function getCdpost()
    {
        return $this->_cdPost;
    }
    public function getVille()
    {
        return $this->_ville;
    }
    public function getEmail()
    {
        return $this->_email;
    }
    public function getTel()
    {
        return $this->_tel;
    }
    public function getDadhesion()
    {
        return $this->_dAdhesion;
    }
    public function getLogin()
    {
        return $this->_login;
    }
    public function getPassword()
    {
        return $this->_password;
    }
    public function getIdPhoto()
    {
        return $this->_idPhoto;
    }
    public function getIdRole()
    {
        return $this->_idRole;
    }
    //Une List de Setters
    public function setId($id): void
    {
        $this->_idAdherent= $id;
    }
    public function setNom($nom): void
    {
        $this->_nom = $nom;
    }
    public function setPrenom($prenom): void
    {
        $this->_prenom = $prenom;
    }
    public function setBornDate($bornDate): void
    {
        $this->_dNaiss = $bornDate;
    }
    public function setAddr1($addr1): void
    {
        $this->_addr1 = $addr1;
    }
    public function setCdpost($cdpost): void
    {
        $this->_cdPost = $cdpost;
    }
    public function setVille($ville): void
    {
        $this->_ville = $ville;
    }
    public function setEmail($email): void
    {
        $this->_email = $email;
    }
    public function setTel($tel): void
    {
        $this->_tel = $tel;
    }
    public function setDadhesion($dadhesion): void
    {
        $this->_dAdhesion = $dadhesion;
    }
    public function setLogin($login): void
    {
        $this->_login = $login;
    }
    public function setPassword($password): void
    {
        $this->_password = $password;
    }
    public function setIdPhoto($idPhoto): void
    {
        $this->_idPhoto = $idPhoto;
    }
    public function setIdRole($idRole): void
    {
        $this->_idRole = $idRole;
    }
}