<?php
require_once '../model/Connexion.class.php';
require_once '../model/Client.class.php';

class ClientDao{

	public static function GetAllClient()
	{//tous les clients
		$connexionbd=new ConnexionBD();
		return $connexionbd->query("select * from client");
		
    }
 
    public static function AddNewClient($client)
    {//insert client $client objet
        $connexionbd=new ConnexionBD();
        return $connexionbd->exec("insert into client values('".$client->getIdc()."','".$client->getNom()."', '".$client->getMail()."','".$client->getAdresse_exp()."', '".$client->getAdresse_fac()."', '".$client->getPersonne_contact()."' )");
    }    

    public static function UpdateClient($client)
    {//update client 
	$connexionbd=new ConnexionBD();

	return $connexionbd->exec("update client set idc='".$client->getIdc()."', nom='".$client->getNom()."', email='".$client->getMail()."', adresse_exp='".$client->getAdresse_exp()."' , adresse_fac='".$client->getAdresse_fac()."' , personne_contact='".$client->getPersonne_contact()."'");
    }
    
    public static function DeleteClient($idc)
    { //delete client id=$idc
	$connexionbd=new ConnexionBD();

	return $connexionbd->exec("delete from client where idc=$idc");
    }

    public static function GetClient($idc)
    {//affichage de client dans un objet condition sur $idc
	$connexionbd=new ConnexionBD();
	return $connexionbd->query("select * from client where idc=$idc");
    }
}
?>    
