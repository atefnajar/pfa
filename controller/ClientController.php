<?php
require_once '../dao/clientDao.php';
require_once '../model/Client.class.php';
switch ($_REQUEST['action']) {

        
    
        case 'add':
            $client=new Client();
            $client->setidc($_REQUEST['idc']);
            $client->setMail($_REQUEST['mail']);
            $client->setNom($_REQUEST['nom']);
            $client->setAdresse_exp($_REQUEST['adresse_exp']);
            $client->setAdresse_fac($_REQUEST['adresse_fac']);
            $client->setPersonne_Contact($_REQUEST['personne_contact']);

        ClientDao::AddNewClient($client);
        header("location:../view/client.php");
        break;

        case 'update':
			$client=new client();
            $client->setIdc($_REQUEST['idc']);
            $client->setMail($_REQUEST['mail']);
            $client->setNom($_REQUEST['nom']);
            $client->setAdresse_exp($_REQUEST['adresse_exp']);
            $client->setAdresse_fac($_REQUEST['adresse_fac']);
            $client->setPersonne_Contact($_REQUEST['personne_contact']);

            
        
        clientDao::Updateclient($client);
        header("location:../view/client.php");
        break;    

        case 'delete':
        $idc=$_REQUEST['idc'];

        clientDao::Deleteclient($idc);
		header("location:../view/client.php");
        break;
        default:header("location:../view/client.php");
        break;

}
?>    
