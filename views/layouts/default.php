<!DOCTYPE html>
<html>
<head>
	<title>Gestion Campus</title>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?=BASE_URL?>/public/css/style.css"/>
</head>

<body>
	
	<div class="container-fluid">
	 	<div class="row p-0">
			<div class="col-2 text-white color_princ1 mhp100pp shadow-lg p-3">
				<span><small>GESTION DES CHAMBRES</small></span>

				<p><br><br><br></p>
				<span><small>MENU</small></span>	
				
				<nav class="gauche-text text-white col">
					<ul class="navbar-nav navbar-light h6 ml-0">
						<br>
						<li class="nav-item shadow-sm ">
							<img src="<?=BASE_URL?>/public/img/ic-liste.png">
							<a href="<?=BASE_URL?>/etudiant/ajoutEtudiant" class="text-white">Create Etudiant</a>
								
						</li>
						<br>
						<li class="nav-item shadow-sm">
							
							<img src="<?=BASE_URL?>/public/img/ic-ajout.png">
							<a href="<?=BASE_URL?>/etudiant/listeEtudiant" class="text-white">Lister Etudiant</a>
							
						</li>
						<br>
						<li class="nav-item shadow-sm">
							<img src="<?=BASE_URL?>/public/img/ic-liste.png">
							<a href="<?=BASE_URL?>/chambre/ajoutChambre" class="text-white">Create Chambre</a>
							
						</li>
						<br>
						<li class="nav-item shadow-sm">
							<img src="<?=BASE_URL?>
							/public/img/ic-ajout.png">
							<a href="<?=BASE_URL?>/chambre/listeChambre" class="text-white">Lister Chambre</a>
							
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-10 p-0 justify-content-center">
				<div class="bande_haut hp100px color_princ2 p-0 shadow-lg"></div>
				<div class=" text-center content-center" >
					<?php
						echo $content_for_layout;
					?>
				</div>
			</div>
		</div>
	</div>
	
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</body>
</html>