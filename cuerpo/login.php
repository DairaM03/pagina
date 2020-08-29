

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
		<a href="productos.php">Productos</a>
		<a href="?p=ofertas">Ofertas</a>
		<a href="?p=carrito">Mi Carrito</a>
		<a href="?p=miscompras">Mis Compras</a>
		<a href="login.php">login</a>
	</div>
	<div class="cuerpo">
		<center>
		<form method="post" action="">
			<div class="centrar_login">
				<label><h2><i class="fa fa-key"></i> Iniciar Sesión</h2></label>
				<div class="form-group">
					<input type="text" autocomplete="off" class="form-control" placeholder="Usuario" name="username"/>
				</div>

				<div class="form-group">
					<input type="password" class="form-control" placeholder="Contraseña" name="password"/>
				</div>

				<div class="form-group">
					<button class="btn btn-submit" name="enviar" type="submit"><i class="fa fa-sign-in"></i> Ingresar</button>
				</div>
			</div>
		</form>
	</center>
		
	</div>
	<div class="footer">
		Copyright Daira &copy; <?=date("Y")?>
	</div>

</body>
</html>
	