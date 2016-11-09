<?php
	ini_set( "display_errors", "on" );
	error_reporting( E_ALL );

	$usuario = "adrian";
	$contrasena = "@ArootN@";

	$mbd = new PDO('pgsql:host=localhost;dbname=prueba', $usuario, $contrasena);
	$mbd->exec( "SET CHARACTER SET utf8" );
	$mbd ->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

	$sql = 'SELECT name, color, calories
	FROM fruit
	WHERE calories < ? AND color = ?';

	$sth = $mbd->prepare( $sql );
	$sth->execute( array( 150, 'red' ) );
	$red = $sth->fetchAll();
	var_dump( $red );

	$sth->execute(array(175, 'yellow'));
	$yellow = $sth->fetchAll();
	var_dump( $yellow );

	$sth = null;
	$mbd = null;
?>