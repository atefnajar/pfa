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
				<a href=" administration.php">
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
				<a href="#">
					<i class='bx bx-line-chart'></i>
					<span class="text">Statistiques</span>
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
				<span class="admin_name">Prem Shahi</span>
			  </div>
			
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Table de bord</h1>
				</div>
			</div>

			<ul class="box-info">
				<li>
                    <i class='bx bxs-receipt'></i>
					<span class="text">
						<h3>1020</h3>
						<p>Factures</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Clients</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-credit-card'></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Devis</p>
					</span>
				</li>
                <li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total</p>
					</span>
				</li>
			</ul>
            <hr>
            <form action="" method="">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="numero de facture">
                      </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="nom de client">
                  </div>
                  <label id="e1">depuit</label> 
                  <div class="col">
                    <input type="text" class="form-control" placeholder="jj/mm/aaaa" id="e1">
                  </div>
                  <label id="e2">à</label> 
                  <div class="col">
                   <input type="text" class="form-control" placeholder="jj/mm/aaaa" id="e2">
                  </div>
                  <button type="submit" class="btn btn-primary">recherche</button>
                </div>
              </form>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Date Order</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Détails de la facturation:</h3>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>facture payées (05) </p>
							<i class='bx bxs-message-check'></i>
						</li>
						<li class="semi-completed">
							<p>facture partiellement payées (08) </p>
							<i class='bx bx-dollar' ></i>
						</li>
						<li class="not-completed">
							<p>facture non payées (41)</p>
							<i class='bx bxs-comment-x'></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>