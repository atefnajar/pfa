<?php
class Produit
{
    private $reference;
    private $description;
    private $dateCreation;
    private $cout_unitaire;
    
  
    
    public function  __construct()
    {$this->reference="";
        $this->description="";
        $this->dateCreation="";
        $this->coup_unitaire=0;
    
        
    }   


    public function getReference()
    {
       return $this->reference;
    }

    public function setReference($ref)
    {
        $this->reference=$ref;
    }
    public function setDescription($descri){
        $this->description=$descri;
    }
    public function getDescription()
    {
       return $this->description;
    }


    public function setCout_unitaire($cu){
        $this->cout_unitaire=$cu;
    }
    public function getCout_unitaire()
    {
       return $this->cout_unitaire;
    }

    public function setDateCreation($date){
        $this->dateCreation=$date;
    }
    public function getDateCreation()
    {
       return $this->dateCreation;
    }

 
}    
?>