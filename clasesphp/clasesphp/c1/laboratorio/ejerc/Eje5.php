<?php

$titulo = "Extensiones" ;
$encabezado = "Ejemplo de Extensiones" ;

?>


<html>
<head>
<title> <?php echo $titulo; ?> </title>
</head>

<body>

<h1 align="center"> <?php echo $encabezado; ?>  </h1>
<BR>


<?php
$num1 = 10;
$num1 = 15;

if ( $num1 == $num2 )
{
	echo "Los numeros son iguales" . "<br>\n" ;
}

if ( $num1 < $num2 )
{
	echo "El primer numero es menor que el segundo numero" . "<br>\n" ;
}
else
{
	echo "El segundo numero es mayor que el primer numero" . "<br>\n" ;
}

?>

</body>
</html>
