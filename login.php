<!DOCTYPE html>
<html>

	<link rel="stylesheet" href="css/estilos.css"/>
	<script type="text/javascript"  href="./js/scripts.js"></script>
	<title>CHARAPE</title>

<head>
	<div class="header">
		CHARAPE
	</div>
	<div class="menu">
		<a href="index.php">Principal</a>
		<a href="login.php">login</a>
		<a href="carritodecompras.php">carrito</a>
		<a href="admin.php">admin</a>
		
		
	</head>
<body>		
	</div>
	<div class="cuerpo">
		<form id="formulario" method="post" action="./login/verificar.php">
		<?php 
		if(isset($_GET['error'])){
			echo '<center>Datos No Validos</center>';
		}
		?>
		<label for="usuario">Usuario</label><br>
		<input type="text" id="usuario" name="Usuario" placeholder="usuario" ><br>
		<label for="password">Password</label><br>
		<input type="password" id="password" name="Password" placeholder="password" ><br>
		<input type="submit" name="aceptar" value="Aceptar" class="aceptar">
	</form>
	</div>

	<div class="footer">
		Copyright Daira &copy; <?=date("Y")?>
	</div>

</body>
</html>