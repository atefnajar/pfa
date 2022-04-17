<?php
require_once '../dao/clientDao.php';
require_once '../model/Client.class.php';
switch ($_REQUEST['action']) {
    case 'formadd':
		header("location:../view/ajouterClient.php");
        break;
    case 'formupdate':
        header("location:../view/updateClient.php?ref=".$_REQUEST['ref']);
        break;
    
        case 'add':
            $client=new Client();
            $client->setidc($_REQUEST['idc']);
            $client->setMail($_REQUEST['mail']);
            $client->setNom($_REQUEST['nom']);
            $client->setAdresse_exp($_REQUEST['adresse_exp']);
            $client->setAdresse_fac($_REQUEST['adresse_fac']);
            $client->setPersonne_Contact($_REQUEST['personne_contact']);

        clientDao::AddNewClient($client);
        header("location:../view/client.php");
        break;

        case 'update':
			$client=new client();
            $client->setidc($_REQUEST['idc']);
            $client->setMail($_REQUEST['mail']);
            $client->setNom($_REQUEST['nom']);
            $client->setAdresse_exp($_REQUEST['date_exp']);
            $client->setAdresse_fac($_REQUEST['date_fac']);
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