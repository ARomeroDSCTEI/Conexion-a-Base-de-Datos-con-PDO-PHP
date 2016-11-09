<?php
	ini_set( "display_errors", "on" );
	error_reporting( E_ALL );

	$usuario = "adrian";
	$contrasena = "@1ArootN@";

	try {
		$mbd = new PDO('pgsql:host=localhost;dbname=prueba', $usuario, $contrasena);
	} catch (PDOException $e) {
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
?>