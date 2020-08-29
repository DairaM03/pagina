<?php 
include "configs/config.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/estilo.css"/>
	<title>CHARAPE</title>
</head>
<body>
	<div class="header">
		CHARAPE
	</div>
	<div class="menu">
		<a href="principal.php">Principal</a>
		<a href="?p=productos">Productos</a>
		<a href="?p=ofertas">Ofertas</a>
		<a href="?p=carrito">Mi Carrito</a>
		<a href="?p=miscompras">Mis Compras</a>
		<a href="admin/">Panel Admin</a>
	</div>

	<div class="footer">
		Copyright Daira &copy; <?=date("Y")?>
	</div>

</body>
</html>