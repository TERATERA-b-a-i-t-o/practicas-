<?php

$titulo = "Constantes Predefinidas" ;
$encabezado = "Ejemplo de Constantes Predefinidas" ;

?>


<html>
<head>
<title> <?php echo $titulo; ?> </title>
</head>

<body>

<h1 align="center"> <?php echo $encabezado; ?>  </h1>
<BR>


<?php

echo PHP_OS . "<BR> \n";

echo PHP_VERSION . "<BR> \n";

echo M_PI . "<BR> \n";

echo DIRECTORY_SEPARATOR . "<BR> \n";

?>

</body>
