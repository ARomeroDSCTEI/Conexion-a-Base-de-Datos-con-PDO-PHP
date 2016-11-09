<?php
	ini_set( "display_errors", "on" );
	error_reporting( E_ALL );

	$usuario = "adrian";
	$contrasena = "@ArootN@";

	$mbd = new PDO('pgsql:host=localhost;dbname=prueba', $usuario, $contrasena);
	$mbd->exec( "SET CHARACTER SET utf8" );
	$mbd->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

	$sql = 'SELECT name, color, calories FROM fruit ORDER BY name';
	foreach ( $mbd->query( $sql ) as $row ) {
		echo "Nombre: ". $row['name'] . "</br>";
		echo "Color: ". $row['color'] . "</br>";
		echo "Calorias: ". $row['calories'] . "</br><hr />";
	}
	
	$q = null;
	$mbd = null;
?>