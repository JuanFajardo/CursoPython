<?php
session_start();
ini_set('display_errors', 1);

$cn = mysqli_connect("localhost", "bett0", "123", "sqli");

?>

<html lang="es">
<meta charset="utf-8" />
<head>
	<title>Bett0 - SQL Ijection Basico - Principal</title>
</head>
<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/fontawesome/font-awesome.css">
<body bgcolor="#C4CEC6">

	<div class="container">

		<div class="row">
			<div class="col-md-14">
				<a href="index.php"><img src="assets/images/banner.jpg" class="img-rounded" width="100%"></img></a>
			</div>
		</div>

    <div class="row">
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">OwaspLatanTour 2019</a>
			    </div>
					class="active"
			    <ul class="nav navbar-nav">
			      <li><a href="index.php">Inicio</a></li>
			      <li><a href="login.php">Administracion</a></li>
			      <li><a href="organigrama.php">Organigrama</a></li>
			      <li><a href="contacto.php">Contacto</a></li>
			    </ul>
			  </div>
			</nav>
    </div>
