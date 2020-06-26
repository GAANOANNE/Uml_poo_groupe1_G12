<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	
	<div class="card">
		<div class="card-header">
		<span>GESTION DES CHAMBRES</span><br>
		<pan>MENU</pan>	
		</div>
		<div class="gauche">
			
			<div class="gauche-text">
				<li>
					<img src="./public/img/ic-liste.png">
					<a href="accueil.php?action=createEtudiant">Create Etudiant</a>
						
				</li>
				<li>
					
					<img src="./public/img/ic-ajout.png">
					<a href="accueil.php?action=listerEtudiant">Lister Etudiant</a>
					
				</li>
				<li>
					<img src="./public/img/ic-liste.png">
					<a href="accueil.php?action=createChambre">Create Chambre</a>
					
				</li>
				<li>
					<img src="./public/img/ic-ajout.png">
					<a href="accueil.php?action=listerChambre">Lister Chambre</a>
					
				</li>
			</div>
		</div>
		<?php
			if (isset($_GET['action'])) {
				switch ($_GET['action']) {
					case 'createEtudiant':
						# code...							
						include("createEtudiant.php");
						break;
					case 'listerEtudiant':
						# code...							
						include("listerEtudiant.php");
						break;
					case 'createChambre':
						# code...							
						include("createChambre.php");
						break;
					case 'listerChambre':
						# code...						
						include("listerChambre.php");
						break;
							
					default:
						# code...
						break;
				}			
			}
		?>
	</div>
</body>
</html>