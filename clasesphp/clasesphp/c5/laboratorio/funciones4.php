<?php $titulo="Funciones personalizadas en PHP"; ?>
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
              //declaración
              function ver(){
                  echo("texto de mi primera función");
              }
              //ejecución
              ver();
            ?><hr align="left" width="500" /><br />
            <?php
              //declaración
              function negrita($texto){
                  echo("<strong>" . $texto . "</strong><br />");
              }
              //ejecución
              negrita("Hola Mundo!");
              negrita("otro texto");
              negrita($titulo);
            ?><hr align="left" width="500" /><br />
            <?php
              function resta($n1,$n2){
                  $total=$n1-$n2;
                  echo($total);
              }
              resta(59,18);
            ?><hr align="left" width="500" /><br />
            <?php
              function colores($color,$texto){
                  echo("<span style=\"color:#" . $color . "\">" . $texto . "</span>");
              }
              colores("f00",$titulo); ?><br /><?php
              colores("ff0","Amarillo"); ?><br /><?php
              colores("fc0","Naranja"); ?><br /><?php
              colores("7f7","Verde");
            ?><hr align="left" width="500" /><br />
            <?php
              function suma($a,$b){
                  $resultado=$a+$b;
                  return $resultado; 
              }
              echo( suma(10,9) );
            ?>
	</body>
</html>