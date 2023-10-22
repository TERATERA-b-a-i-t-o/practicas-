<?php $titulo="Libro de visitas"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title><?php echo($titulo); ?></title>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	</head>
	<body>
		<h1><?php echo($titulo);?></h1>
		<hr />
		<!-- inicio del desarrollo -->
		<?php
			$nombre = $_POST["nombre"];
			$comentarios = $_POST["comentarios"];

			$archivo = "libro-visitas.txt";
			$modo = "r";

			$fp = fopen($archivo, $modo);

			$contenido = fread($fp, filesize($archivo));

			fclose($fp);


			$modo = "w";
			$fp = fopen($archivo, $modo);

			$nuevo = $nombre . " " . date("d/m/Y h:i:s") . "<br />\n";
			$nuevo .= $comentarios . "<hr /> \n";

			fwrite($fp, $nuevo . "\n" . $contenido);

			fclose($fp);


			echo ($nuevo . "\n" . $contenido);

		?>
	</body>
</html>