<?php
require_once '../dao/ProduitDao.php';
require_once '../model/Produit.class.php';
switch ($_REQUEST['action']) {
   
        case 'add':
            $produit=new Produit();
            $produit->setReference($_REQUEST['reference']);
            $produit->setDateCreation($_REQUEST['dateCreation']);
            $produit->setDescription($_REQUEST['description']);
            $produit->setCout_unitaire($_REQUEST['cout_unitaire']);
        produitDao::AddNewproduit($produit);
        header("location:../view/produit.php");
        break;

        case 'update':
			$produit=new Produit();
            $produit->setReference($_REQUEST['reference']);
            $produit->setDateCreation($_REQUEST['dateCreation']);
            $produit->setDescription($_REQUEST['description']);
            $produit->setCout_unitaire($_REQUEST['cout_unitaire']);
        
            ProduitDao::UpdateProduit($produit);
             header("location:../view/produit.php");
        break;    

        case 'delete':
        $ref=$_REQUEST['ref'];
        
        produitDao::Deleteproduit($ref);
		header("location:../view/produit.php");
        break;
        default:header("location:../view/produit.php");
        break;

}
?>    
