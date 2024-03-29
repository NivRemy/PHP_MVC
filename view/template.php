<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Voyages</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="index.php?page=voyages">Voyages</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php?page=voyages">Parcourir<span class="sr-only">(current)</span></a>
	      </li>
	      <?php
	      if(!isset($_SESSION['mail'])){
	      ?>
	      <li class="nav-item">
	        <a class="nav-link" href="index.php?page=loginForm">Se connecter</a>
	      </li>
	      <?php
	  	  }
	      if(isset($_SESSION['mail'])){
	      	?>
			<li class="nav-item">
	        	<a class="nav-link" href="index.php?page=voyageForm">Ajouter voyage</a>
	      	</li>
	      	<li class="nav-item">
	        	<a href="index.php?sk=1" class="btn btn-danger" name="logout">Déconnexion</a>
	      	</li>
	      	<?php
			}
			?>
	      
	    </ul>
	  </div>
	</nav>
	<br>

	<!-- Affichage du contenu de la page -->
	<?= $content;?>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>