<?php
session_start();
	include "conexion.php";
	if(isset($_SESSION['Usuario'])){

	}else{
		header("Location: ./index.php?Error=Acceso denegado");
	}
?>
<!DOCTYPE html>
<html>

	<link rel="stylesheet" href="css/estilos.css"/>
	<script type="text/javascript"  href="./js/scripts.js"></script>
	<title>CHARAPE</title>
<body>		
	
	<div class="cuerpo">
		<nav class="menu2">
	  <menu>
	    <li><a href="./">Inicio</a></li>
	    <li><a href="#" class="selected">Admin</a></li>
	    <li><a href="./admin/agregarproducto.php" >Agregar</a></li>
	    <li><a href="./admin/modificar.php" >Modificar</a></li>
	    <li><a href="./login/cerrar.php">Salir</a></li>
	  </menu>
	</nav>

	<center><h1>Últimas Compras</h1></center>
	<table border="0px" width="100%">	
		<tr>
			<td>Imagen</td>
			<td>Nombre</td>
			<td>Precio</td>
			<td>Cantidad</td>
			<td>Subtotal</td>
		</tr>	

		<?php
			$resultado=$conexion ->query("select * from compras");
			$numeroventa=0;
			while ($fila =mysqli_fetch_array($resultado)) {
					if($numeroventa	!=$fila['numeroventa']){
						echo '<tr><td>Compra Número: '.$fila['numeroventa'].' </td></tr>';
					}
					$numeroventa=$fila['numeroventa'];
					echo '<tr>
						<td><img src="./productos/'.$fila['imagen'].'" width="100px" heigth="100px" /></td>
						<td>'.$fila['nombre'].'</td>
						<td>'.$fila['precio'].'</td>
						<td>'.$fila['cantidad'].'</td>
						<td>'.$fila['subtotal'].'</td>

					</tr>';
			}
		?>
	</table>
	</div>

	<div class="footer">
		Copyright Daira &copy; <?=date("Y")?>
	</div>

</body>
</html>