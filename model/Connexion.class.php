<?php

class ConnexionBD{

	public $host;
	public $dbname;
	public $user;
	public $password;
	public $connexion;

	public function __construct()
	{
		$this->host="localhost";
		$this->dbname="entreprise";
		$this->user="root";
		$this->password="";
		$this->connexion=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->password);
	}

	function query($sql)
	{
		return $this->connexion->query($sql);
	}

	function exec($sql)
	{
		return $this->connexion->exec($sql);
	}
}

function maConnexion(){
	$base='services des mines';
	$serveur='localhost';
	$user='root';
	$password='';
	try
	{
	$bdd = new PDO("mysql:host=$serveur;dbname=$base",$user ,$password);
	$bdd->query("SET NAMES 'utf8'");
	return $bdd;
	}
	catch (PDOException $e)
	{
	die('Erreur : ' . $e->getMessage());
	}
	}


?>