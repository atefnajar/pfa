
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

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
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
					<h1>dashbord</h1>
				</div>
			</div>

			<!--form-->
			<div class="container-fluid px-1 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="col-xl-7 col-lg-8 col-md-9 col-11 ">

						<div class="card">
							<form action=" ../controller/ClientController.php?action=update" method="POST" >
								  <div class="info2">
									<h3>Nouveau client</h3>
								</div>
								<?php
									include_once('../dao/ClientDao.php');
									$rep=ClientDao::GetClient($_REQUEST["idc"]);
									$ligne=$rep->fetchObject();
									
									?>
								<div class="form-row">
								  <div class="form-group col-md-6">
									<label for="nom">Nom du client</label>
									<input type="text" class="form-control" name="nom" id="nom" value="<?=$ligne->nom?>" required>
								  </div>
								  <div class="form-group col-md-6">
									<label for="Nom">identifiant legale du client</label>
									<input type="text" class="form-control" name="idc" id="id" value="<?=$ligne->idc?>" required>
								  </div>
								  <div class="form-group col-md-6">
									<label for="Nom">Personne de contact</label>
									<input type="text"   name="personne_contact" class="form-control" id="npc" required value="<?=$ligne->personne_contact?>">
								  </div>
								  <div class="form-group col-md-6">
									<label for="Nom">Email du client</label>
									<input type="text" class="form-control" name="mail" id="mail" value="<?=$ligne->email?>">
								  </div>
								  <div class="form-group col-md-6">
								  <label for="Textarea">Adress de facturation</label>
								  <input class="form-control" name="adresse_fac" id="Textarea"  required value="<?=$ligne->adresse_fac?>" required>
								  </div>
								  <div class="form-group col-md-6">
								  <label for="Textarea2">Adress d'expedition</label>
								  <input class="form-control"  name="adresse_exp" id="Textarea2" required value="<?=$ligne->adresse_exp?>" required>
								  </div>
								</div>
								<input type="submit" class="btn btn-success" value="Sauvegarder">
								</form>
						</div>
					</div>
				</div>
			</div>
			<!--form-->
			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="../js/script.js"></script>
</body>
</html>
