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
		<?php
		include 'conexion.php';
		$resultado=$conexion ->query("select * from productos where id=".$_GET['id'])or die($conexion -> error);
		while ($fila =mysqli_fetch_array($resultado)) {
		?>
			
			<center>
				<img src="./productos/<?php echo $fila['imagen'];?>"><br>
				<span><?php echo $fila['nombre'];?></span><br>
				<span>Precio: <?php echo $fila['precio'];?></span><br>
				<a href="./carritodecompras.php?id=<?php  echo $fila['id'];?>">Añadir al carrito de compras</a>
			</center>
		
	<?php
		}
	?>
	</div>

	<div class="footer">
		Copyright Daira &copy; <?=date("Y")?>
	</div>

</body>
</html>