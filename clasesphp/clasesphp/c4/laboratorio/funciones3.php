<?php $titulo="Trabajo con funciones integradas en PHP"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title><?php echo($titulo); ?></title>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	</head>
	<body>
            <h1><?php echo($titulo);?>:</h1><br /><br />
		    <!-- inicio del desarrollo -->
        <?php
            $dato="hola";
            if(is_numeric($dato)==1){
                echo("Es un número");
            }
            else{
                echo("No es un número");
            }
            ?>
            <hr align="left" width="400" /><br />
            <?php
            $num=9876.4538;
            echo($num); 
            ?><br /><br />
            Función ceil: <?php echo(ceil($num) . "<br />"); ?>
            Función floor: <?php echo(floor($num) . "<br />"); ?>
            Función round: <?php echo(round($num,3) . " (redondea de 0-4 para abajo y de 5-9 para arriba)" . "<br />"); ?>
            Función number_format: <?php echo(number_format($num,2,",","")); ?> 
            (aca deja de ser un numero y pasa a ser texto)    
	</body>
</html>