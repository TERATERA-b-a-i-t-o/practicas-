<h1>Lab 4</h1>

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

</br>
<table border="1" cellpadding="1" bordercolor="#333333" bgcolor="#0099FF">
	<tr>
		<td>El Valor promedio</td>
		<td><b><?php echo $prom; ?></b></td>
	</tr>
	<tr>
		<td>El Valor de X1</td>
		<td><b><?php echo $x1; ?></b></td>
	</tr>
	<tr>
        <td>El Valor de X2</td>
		<td><b><?php echo $x2; ?></b></td>
	</tr>
	<tr>
        <td>El Valor de X3</td>
		<td><b><?php echo $x3; ?></b></td>
		<td><?php echo number_format($x,2,",","."); ?></td>
	</tr>

</table>



