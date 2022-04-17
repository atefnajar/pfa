<?php
require_once '../model/Connexion.class.php';
require_once '../model/produit.class.php';

class ProduitDao{

	public static function GetAllProduit()
	{//tous les produits
		$connexionbd=new ConnexionBD();
		return $connexionbd->query("select * from produit");
		

    }
    public static function GetAllProduit1($champ,$valeur)
	{
		$connexionbd=new ConnexionBD();
		return $connexionbd->query("select * from produit where $champ=$valeur");
		

    }
 
    public static function AddNewProduit($produit)
    {//insert produit $produit objet
        $connexionbd=new ConnexionBD();
        return $connexionbd->exec("insert into produit values('".$produit->getReference()."','".$produit->getCout_unitaire()."', '".$produit->getDescription()."','".$produit->getDateCreation()."' )");
    }    

    public static function UpdateProduit($produit)
    {//update produit 
	$connexionbd=new ConnexionBD();

	return $connexionbd->exec("update produit set reference='".$produit->getReference()."' ,cout_unitaire='".$produit->getCout_unitaire()."', dateCreation='".$produit->getDateCreation()."', description='".$produit->getDescription()."'");
    }
    
    public static function DeleteProduit($reference)
    { //delete produit id=$reference
	$connexionbd=new ConnexionBD();

	return $connexionbd->exec("delete from produit where reference=$reference");
    }

    public static function GetProduit($reference)
    {//affichage de produit dans un objet condition sur $reference
	$connexionbd=new ConnexionBD();
	return $connexionbd->query("select * from produit where reference=$reference");
   
    }
}
?>    