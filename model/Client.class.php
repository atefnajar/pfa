<?php
class Client
{
    private $nom;
    private $mail;
    private $adresse_exp;
    private $adresse_fac;
    private $personne_contact;
  
    
    public function  __construct()
    {$this->idc="";
        $this->nom="";
        $this->mail="";
        $this->adresse_fac="";
        $this->adresse_exp="";
        $this->personne_contact="";
        
    }   
    public function getIdc()
    {
       return $this->idc;
    }

    public function setIdc($idc)
    {
        $this->idc=$idc;
    }


    public function getMail()
    {
       return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail=$mail;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }
    public function getNom()
    {
       return $this->nom;
    }


    public function setPersonne_Contact($pdc){
        $this->personne_contact=$pdc;
    }
    public function getPersonne_Contact()
    {
       return $this->personne_contact;
    }

    public function setAdresse_exp($datee){
        $this->datee=$datee;
    }
    public function getAdresse_exp()
    {
       return $this->datee;
    }
    public function setAdresse_fac($datef){
        $this->datef=$datef;
    }
    public function getAdresse_fac()
    {
       return $this->datef;
    }

 
}    
?>