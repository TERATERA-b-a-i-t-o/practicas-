<h1>Lab 2</h1>

<?php

$usu=$_GET[usuario];
$psw=$_GET[password];


if ($usu=="admin" and $psw=="123")
	{
	echo"<h1>Bienvenido: $usu </h1>";
	}
	else
	{
	echo "<font color='red'> Usuario Incorrecto </font>";
	}


?>
<hr>
<a href="lab2_form.php">volver</a>




