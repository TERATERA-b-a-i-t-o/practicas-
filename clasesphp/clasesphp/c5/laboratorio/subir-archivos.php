<?php
	$titulo = "Publicación de archivos";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
	<head>
		<title><?php echo($titulo); ?></title>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	</head>
	<body>
		<h1><?php echo($titulo); ?></h1>
		<?php

		// Capturamos el archivo y los campos
		$nombre = $_POST["nombre"];
		$desc = $_POST["desc"];

		$archivo = $_FILES["archivo"]["name"]; // nombre del archivo 
		$archivoTemp = $_FILES["archivo"]["tmp_name"]; // nombre temporario del archivo subido

		$dir = "imagenes" . "/";
		
		move_uploaded_file($archivoTemp, "$dir" . $archivo);

		$valores = getimagesize($dir . $archivo); // capturamos tamaños de archivo (output en pos. 3 retorna formato HTML)
		?>
		
		<h2><?php echo($nombre); ?></h2>
		<p><?php echo($desc); ?></p>
		<img src="<?php echo($dir . $archivo); ?>" alt="<?php echo($nombre); ?>" <?php echo($valores[3]); ?> />

	</body>
</html>