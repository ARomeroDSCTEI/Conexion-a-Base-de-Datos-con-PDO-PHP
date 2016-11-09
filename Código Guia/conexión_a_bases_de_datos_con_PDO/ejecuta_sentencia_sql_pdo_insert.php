<?php
	ini_set( "display_errors", "on" );
	error_reporting( E_ALL );

	$usuario = "adrian";
	$contrasena = "@ArootN@";

	$mbd = new PDO('pgsql:host=localhost;dbname=prueba', $usuario, $contrasena);
	$mbd->exec( "SET CHARACTER SET utf8" );
	$mbd ->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

	$sql = "INSERT INTO fruit (name, color, calories) VALUES ('manzana', 'roja', 100)";

	$q = $mbd->query( $sql );
	if ( $q->rowCount() ) {
		echo "Manzana fue insertada";
	} else {
		echo "Error: No pudo ser insertada";
	}
	
	$q = null;
	$mbd = null;
?>