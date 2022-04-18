
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	<title>recherche client</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="adminidtation.php" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="administration.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Accueil</span>
				</a>
			</li>
			<li>
				<a href="client.php">
                    <i class='bx bxs-user'></i>
					<span class="text">Clients</span>
				</a>
			</li>
			<li>
				<a href="produit.php">
					<i class='bx bxl-product-hunt' ></i>
					<span class="text">produits</span>
				</a>
			</li>
            <li>
				<a href="#">
					<i class='bx bxs-receipt'></i>
					<span class="text">Factures</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-credit-card' ></i>
					<span class="text">Devis</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">paramètre</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link"> <i class='bx bx-home'></i>Home</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>


			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<div class="profile-details">
				<img src="img/people.png" alt="">
				<span class="admin_name">ali chaabane</span>
			  </div>
			
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>PRODUITS</h1>
				</div>
			</div>
				<?php
				include_once '../dao/ProduitDao.php';
				?>
              
              <hr>
			<div class="flex-container">
				<div>
					<a  class="btn btn-primary" href="ajoutProduit.php"><i class='bx bx-plus'></i>Nouveau produit</a>
				</div>
			  </div>
			  <div class="left">
				<h3 style="text-align:center;">recherche  produit</h3>
			</div>
			
			<div class="table-data">
				<div class="order">
					<div class="head">
					
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					
<?php
include_once("../dao/ClientDao.php");
$ligne=ClientDao::GetClient($_REQUEST['idc']);
if ($ligne->rowCount()==0){
	?><p>ce produit de reference <?=$_REQUEST['idc']?> n'existe pas dans la base de donnees clickez vous sur ajouter produit pour l'ajouter</p><?php
}else{
?>


<table>
<tr>
		<th>idc</th>
		<th>cout unitaire</th>
	<th>description</th>
<th>date de creation</th>
<th>modification/supprission</th>

</tr>
<?php

$value=$ligne->fetchObject()
?>
<tr>
 <td><?=$value->idc; ?> </td>
 <td><?=$value->nom; ?> </td>
 <td><?=$value->mail; ?> </td>
 <td><?=$value->adresse_fac; ?> </td>
 <td><?=$value->adresse_exp; ?> </td>
 <td><?=$value->personne_contact; ?> </td>

 <td>
	 <div style="text-align:center;">
	<a  href="#"onclick=' confirmeClient(<?=$value->idc?>)'>
		<img src="../images/corbeille.png">

	</a>
	<a href="updateClient.php?ref=<?=$value->idc?>"> 
		<img src="../images/crayon.png">

	</a>

	</div>
 </td>
</tr>
</table>
<?php
}//fin test
?>

				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	
</body>
<script src="../js/confirme.js"></script>
<script src="../js/script.js"></script>
</html>
