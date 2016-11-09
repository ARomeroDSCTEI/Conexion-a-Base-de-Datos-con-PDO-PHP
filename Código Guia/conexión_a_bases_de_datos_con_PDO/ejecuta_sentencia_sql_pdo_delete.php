<?php
	ini_set( "display_errors", "on" );
	error_reporting( E_ALL );

	$usuario = "adrian";
	$contrasena = "@ArootN@";

	$mbd = new PDO('pgsql:host=localhost;dbname=prueba', $usuario, $contrasena);
	$mbd->exec( "SET CHARACTER SET utf8" );
	$mbd ->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

	$sql = "DELETE FROM fruit WHERE name='manzana'";
	$q = $mbd->query( $sql );
	if ( $q->rowCount() ) {
		echo "Manzana Eliminada";
	} else {
		echo "Error: No pudo ser eliminada";
	}
	
	$q = null;
	$mbd = null;
?>