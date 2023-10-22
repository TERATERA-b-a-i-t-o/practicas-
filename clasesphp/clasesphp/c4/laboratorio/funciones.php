<?php $titulo="Trabajo con funciones integradas en PHP"; ?>
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
		<h2 align="center">Trabajo con funciones de cadenas</h2>
        <?php
        $cant=substr_count($titulo,"PHP");
        if($cant>0){
            echo("Subcadena encontrada");
        }
        else{
            echo("Subcadena no encontrada");
        }
        ?>
	</body>
</html>