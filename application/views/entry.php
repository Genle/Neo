<!DOCTYPE html>
<html>
<head>
	<title>
		<?php 
			if(isset($title) && !empty($title))
				echo $title;
			else 
				echo "EMPTY"; 
		?>
	</title>
	<link rel="stylesheet" type="text/css" href=<?php echo css_url('entry.style'); ?> >
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href=<?php echo css_url('button-transparent'); ?>>
</head>
<body>
		<div class="dropdown language">
		  <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown">Language
		  <span class="caret"></span></button>
		  <ul class="dropdown-menu">
		    <li><a href="#">Kreyol</a></li>
		    <li><a href="#">Francais</a></li>
		    <li><a href="#">English</a></li>
		  </ul>
		</div>
	<div class="container">
		<!-- <h1 class="title">Neo Ayiti</h1> -->
		<div class="logo-pic">
			
			<img class="logo" src="http://localhost/LendDatabase/assets/img/logo.png">
		</div>
		<h2 class="welcome-text">
			Byenvini sou neo
		</h2>
		
		<p class="invitation">
			Neo se yon sit ki pemet ou pataje pwoblem kew we
			yon vil espesifik nan peyi a genyen e pwopoze yon solisyon
			a pwoblem sa.
			Ann pataje lide sou ki pwoblem ki genyen ak solisyon ki ka pote
			<br/>poun ka chanje peyi nou
		</p>
		<p class="invitation">
			
		</p>
		<div class="div-btn"><a href=<?php echo base_url()."index.php/Homepage/";?> class="btn-enter">Antre</a></div>
		
		<div class="copyright">
			<span >&copy; Created:Joseph Angelo Flerimé</span>
		</div>
		
	</div>
</body>
</html>