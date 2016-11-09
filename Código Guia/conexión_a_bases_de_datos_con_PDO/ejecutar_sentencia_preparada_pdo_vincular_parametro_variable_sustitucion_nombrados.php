<?php
	ini_set( "display_errors", "on" );
	error_reporting( E_ALL );

	$usuario = "adrian";
	$contrasena = "@ArootN@";

	$mbd = new PDO('pgsql:host=localhost;dbname=prueba', $usuario, $contrasena);
	$mbd->exec( "SET CHARACTER SET utf8" );
	$mbd ->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

	$calorias = 150;
	$color = 'red';
	$gsent = $mbd->prepare( 'SELECT name, color, calories
	FROM fruit
	WHERE calories < :calories AND color = :color' );

	$gsent->bindParam( ':calories', $calorias );
	$gsent->bindParam( ':color', $color );
	$gsent->execute();

	var_dump( $gsent->fetchAll() );

	$gsent = null;
	$mbd = null;
?>