<?php
	ini_set( "display_errors", "on" );
	error_reporting( E_ALL );

	$usuario = "adrian";
	$contrasena = "@ArootN@";

	$mbd = new PDO('pgsql:host=localhost;dbname=prueba;charset=utf8', $usuario, $contrasena);

	$mbd = null;
?>