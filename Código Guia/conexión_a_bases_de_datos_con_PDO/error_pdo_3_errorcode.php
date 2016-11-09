<?php
	$usuario = "adrian";
	$contrasena = "@ArootN@";

	$mbd = new PDO('pgsql:host=localhost;dbname=prueba', $usuario, $contrasena);
	$mbd->exec( "INSERT INTO bones(skull) VALUES ('lucy')" );
	echo "\nPDO::errorCode(): ", $mbd->errorCode();
?>