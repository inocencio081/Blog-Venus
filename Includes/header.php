<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estiloC1.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<script type="text/javascript" src="js/all.js"></script>
</head>
<body>

	<div class="social-bar lightblue">
		<i class="fab fa-facebook-f mr-3"></i>
		<i class="fab fa-twitter mr-3"></i>
		<i class="fab fa-instagram mr-3"></i>
		<i class="fab fa-youtube mr-3"></i>
		<i class="fab fa-pinterest-p mr-3"></i>
		<i class="fas fa-rss mr-3"></i>
		<i class="fab fa-google-plus-g mr-3"></i>
	</div>
	
	<div class="container ">
		<div class="row">
			<div class="col-md-1">
				 <img class="img-fluid logotipo py-4" src="imagens/logo/logotipo.png">
			</div>
			<div class="title-top col-md-3 py-4">
				<h1>Vênus Blog</h1>
				<p> Remember Me</p>
			</div>

			
			<div class="col-md-8 bannertop">
				<?php 
					include_once 'Includes/carrossel.php';
				 ?>
			</div>
		</div>
	</div>

<nav class="navbar navbar-expand-lg navbar-dark ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home</a>
      <a class="nav-item nav-link" href="#">Serviços</a>
      <a class="nav-item nav-link" href="#">Envolvimento Social</a>
      <a class="nav-item nav-link" href="#">Sobre a Empresa</a>
      <a class="nav-item nav-link" href="#">Contactos</a>
    </div>
  </div></nav>