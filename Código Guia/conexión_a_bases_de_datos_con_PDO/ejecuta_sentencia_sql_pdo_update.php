<?php
	ini_set( "display_errors", "on" );
	error_reporting( E_ALL );

	$usuario = "adrian";
	$contrasena = "@ArootN@";

	$mbd = new PDO('pgsql:host=localhost;dbname=prueba', $usuario, $contrasena);
	$mbd->exec( "SET CHARACTER SET utf8" );
	$mbd ->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

	$sql = "UPDATE fruit SET calories = '52' WHERE name='1manzana'";
	$q = $mbd->query( $sql );
	if ( $q->rowCount() ) {
		echo "Calorias de la Manzana fue actualizada";
	} else {
		echo"Error: No pudo ser actualizada";
	}
	
	$q = null;
	$mbd = null;
?>