<?php
session_start();
include "../conexion.php";
$resultado=$conexion ->query("select * from usuarios where Usuario='".$_POST['Usuario']."' AND 
 					Password='".$_POST['Password']."'")	or die($conexion -> error);
	while ($fila =mysqli_fetch_array($resultado)) {
		$arreglo[]=array('Nombre'=>$fila['Nombre'],
			'Apellido'=>$fila['Apellido'],'Imagen'=>$fila['Imagen']);
	}
	if(isset($arreglo)){
		$_SESSION['Usuario']=$arreglo;
		header("Location: ../admin.php");
	}else{
		header("Location: ../login.php?error=datos no validos");
	}
?>