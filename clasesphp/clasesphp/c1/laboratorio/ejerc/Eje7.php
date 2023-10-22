<?php

$titulo = "Uso de Constantes" ;
$encabezado = "Ejemplo de Uso de Constantes" ;

?>


<html>
<head>
<title> <?php echo $titulo; ?> </title>
</head>

<body>

<h1 align="center"> <?php echo $encabezado; ?>  </h1>
<BR>

<form name="frm" method=post action="pag8.2.php">

Ingrese un valor: <input name=valor size=20>

<input type=submit value=Enviar>

</form>

<?php
define ("porc",15);

echo "El monto ingresado fue: " . $valor . "<br>\n" ;
echo "El porcentaje es: " . porc . "% <br>\n" ;

$descuento = $valor * porc/100 ;

echo "El descuento es: " . $descuento . "<br>\n" ;
?>

</body>
</html>
