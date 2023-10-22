<?php
	$titulo = "Formulario de publicación de archivos";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
	<head>
		<title><?php echo($titulo); ?></title>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	</head>
	<body>
		<h1><?php echo($titulo); ?></h1>
		<form action="subir-archivos.php" method="post" enctype="multipart/form-data">
		<p>Seleccione archivo a publicar:<br />
		<input type="file" name="archivo" id="archivo" />
		</p>
		<p>Nombre de archivo:<br />
		<input type="text" name="nombre" id="nombre" />
		</p>
		<p>Descripción del archivo:<br />
		<textarea name="desc" id="text"></textarea>
		</p>
		<input type="submit" value="Publicar" />
		</form>
	</body>
</html>