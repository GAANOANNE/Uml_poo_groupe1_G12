<!DOCTYPE html>
<html>
<head>
	<title>Gestion Campus</title>  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?=BASE_URL?>/public/css/style.css"/>
</head>

<body>
	
	<div class="container-fluid">
	 	<div class="row p-0">
			<div class="col-3 text-white color_princ1 mhp100pp">
				<span><small>GESTION DES CHAMBRES</small></span>

				<p><br><br><br></p>
				<span><small>MENU</small></span>	
				
				<nav class="gauche-text text-white coltext-center">
					<ul class="navbar-nav navbar-light h5 ml-4">
						<br>
						<li class="nav-item">
							<img src="<?=BASE_URL?>/public/img/ic-liste.png">
							<a href="<?=BASE_URL?>/etudiant/ajoutEtudiant" class="text-white">Create Etudiant</a>
								
						</li>
						<br>
						<li class="nav-item">
							
							<img src="<?=BASE_URL?>/public/img/ic-ajout.png">
							<a href="<?=BASE_URL?>/etudiant/listeEtudiant" class="text-white">Lister Etudiant</a>
							
						</li>
						<br>
						<li class="nav-item">
							<img src="<?=BASE_URL?>/public/img/ic-liste.png">
							<a href="<?=BASE_URL?>/chambre/ajoutChambre" class="text-white">Create Chambre</a>
							
						</li>
						<br>
						<li class="nav-item">
							<img src="<?=BASE_URL?>
							/public/img/ic-ajout.png">
							<a href="<?=BASE_URL?>/chambre/listeChambre" class="text-white">Lister Chambre</a>
							
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-9 p-0 justify-content-center">
				<div class="bande_haut hp100px color_princ2 p-0"></div>
				<div class=" text-center content-center" >
					<?php
						echo $content_for_layout;
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>