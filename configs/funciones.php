<?php 
	mysql_connect($host_mysql,$user_mysql,$pass_mysql) or dir ("error al conectar al servidor");
	mysql_select_db($db_mysql) or dir("error conectando a la base de datos")
 ?>