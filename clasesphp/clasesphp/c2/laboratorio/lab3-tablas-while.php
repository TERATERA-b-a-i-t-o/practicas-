<h1>Lab 3</h1>

<?

$titulo = "Laboratorio 3" ;
$encabezado = "Ejercicio: Creacion de tablas" ;

?>


<html>
<head>
<title> <? echo $titulo; ?> </title>
</head>

<body>

<h1 align="center"> <? echo $encabezado; ?>  </h1>

<?= tabla( 2,2 ); ?>

<BR>
<BR>
<BR>



<?


function tabla( $x, $y )
{

	$contFilas = 0;

	$t = "<table border=1 cellpadding=0 cellspacing=0 align=center color=#800080 width=50%>\n";

	while ( $contFilas < $x )
	{
		$contFilas++;
		$contColumnnas = 0;

		//Dibujo las columnas
		$t = $t . "<tr>\n";

		while ( $contColumnnas < $y )
		{
			$contColumnnas++;

			//Dibujo las celdas
			$t = $t . "<td> &nbsp </td>\n";
		}

		//Cierro la columna
		$t = $t . "</tr>";

	}

	$t = $t . "</table>";

	return $t;

}

?>