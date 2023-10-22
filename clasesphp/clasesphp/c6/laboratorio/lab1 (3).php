<h1>Lab 3</h1>

<?php
/*
Prueba3:
Recibe 3 valores por parametro, calculando el valor promedio.
Se imprime el iva de cada precio.
*/

define(IVA,1.21);

$x1= $_GET[x1];
$x2= $_GET[x2];
$x3= $_GET[x3];
$x=38389555;


$prom=($x1+$x2+$x3)/3;
$x1=$x1*IVA;
$x2=$x2*IVA;
$x3=$x3*IVA;


echo "El Promedio es: $prom<br>";
echo "El precio de X1 con IVA es: $x1<br>";
echo "El precio de X2 con IVA es: $x2<br>";
echo "El precio de X3 con IVA es: $x3<br>";
?>
