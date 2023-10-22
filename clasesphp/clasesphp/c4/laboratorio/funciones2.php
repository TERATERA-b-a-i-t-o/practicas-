<?php $titulo="Trabajo con funciones integradas en PHP";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title><?php echo($titulo); ?></title>
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
	</head>
	<body>
            <h1><?php echo($titulo);?>:</h1><br /><br />
		    <!-- inicio del desarrollo -->
        <?php
            $cant=substr_count($titulo,"PHP");
            if($cant>0){
                echo("Subcadena encontrada");
            }
            else{
                echo("Subcadena no encontrada");
            }
        ?>
        <hr align="left" width="400"/><br />
        <?php
            $codigo="A1234BCD";
            $prov=substr($codigo,0,1);
            echo($prov);
        ?>
        <hr align="left" width="400"/><br />
        <?php
            $frase="Me compr? un Fiat 600";
            $viejo="Fiat 600";
            $nuevo="Audi R8";
        
            echo(str_replace($viejo,$nuevo,$frase));   
        ?>
              
	</body>
</html>