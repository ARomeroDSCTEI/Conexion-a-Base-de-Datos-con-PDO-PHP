<?php
ini_set( "display_errors", "on" );
error_reporting( E_ALL );

require_once( "php/conexion.php" );

$consulta = "SELECT * FROM frases_celebres;"

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Frases Célebres - Inicio</title>
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<header>
		<h1>Frases Célebres</h1>
	</header>
	<section class="container">
		<?php
		foreach ( $cnx->query( $consulta ) as $frase ) {
		?>
		<div class="frase">
			<div class="frase-imagen">
				<img src="imagen/<?= $frase[3] ?>" alt="" />
			</div>
			<div class="frase-texto">
				<p><?= $frase[2] ?></p>
				<div class="visto">
					<img src="imagen/eye.png" alt="" /><span><?= $frase[4] ?></span>
				</div>
				<span><?= $frase[1] ?></span>
			</div>
			<div class="clear-left"></div>
		</div>
		<?php
		}
		?>
	</section>
	<footer>
		<p>Creado por Adrian Romero para la Jornada VI Nacional para el uso de las Tecnologías de la información, Comunicación y Conocimiento Libre - UBV</p>
	</footer>
</body>
</html>