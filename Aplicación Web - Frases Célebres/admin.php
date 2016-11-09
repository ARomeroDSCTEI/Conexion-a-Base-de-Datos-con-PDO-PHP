<?php
ini_set( "display_errors", "on" );
error_reporting( E_ALL );

require_once( "php/conexion.php" );

if ( !empty( $_POST ) ) {

	$imagen = ( is_numeric( $_POST["imagen"] ) ) ? "aspas.jpg": $_POST["imagen"];
	
	$sql = "INSERT INTO frases_celebres (autor, frase, imagen) VALUES ( '" . $_POST["autor"] . "', '" . $_POST["frase"] . "', '" . $imagen . "' );";

	$cnx->exec( $sql );

	if ( $cnx->errorCode() === "00000" ) {
		$info = '<div class="info correcto">';
		$info .= "Frase guardada!";
	} else {
		$info = '<div class="info error">';
		$info .= "Error: No se guardo la frase!";
	}
	$info .= '</div>';
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Frases Célebres - Administración</title>
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<header>
		<h1>Frases Célebres - Administración</h1>
	</header>
	<?= $info ?>
	<section class="container">
		<form action="" method="post">
			<label for="imagen">Imagen</label>
			<select name="imagen" id="imagen" required>
				<option value="0">Elegir</option>
				<option value="aspas.jpg">Doble Comas Color Rosado</option>
				<option value="dos-citas_318-10953.jpg">Doble Comas Color Negro</option>
				<option value="pluma.png">Pluma Color Vinotinto</option>
				<option value="icono-poemas-320x210.png">Pluma Color Rosado</option>
				<option value="icono-frases-de-motivacion-320x210.png">Yoga</option>
			</select>
			<label for="autor">Autor</label>
			<input type="text" name="autor" id="autor" required />
			<label for="frase">Texto de la frase</label>
			<textarea name="frase" id="frase" cols="30" rows="10" required></textarea>
			<input type="submit" value="Crear" />
		</form>
	</section>
	<footer>
		<p>Creado por Adrian Romero para la Jornada VI Nacional para el uso de las Tecnologías de la información, Comunicación y Conocimiento Libre - UBV</p>
	</footer>
</body>
</html>