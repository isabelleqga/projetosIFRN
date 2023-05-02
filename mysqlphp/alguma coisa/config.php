<?php
	$endereco = "localhost";
	$usuario = "root";
	$senha = "usbw";
	$banco = "db_agenda";
	$MySQLi = new mysqli($endereco, $usuario, $senha, $banco);
	if(mysqli_connect_errno()) {
		die(mysql_connect_error());
		exit();
	}
	mysqli_set_charset($MySQLi,"utf8");
?>