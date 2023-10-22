<html>
    <head>
        <meta charset='utf-8'>
        <title>Laboratorio 3: notas</title>
        <style>
            h1 {
                text-align: center;
            }
        </style>
    </head>
    <body>
    
        <h1>Lab 3</h1>
        
        
        <table border="1" cellpadding="10" cellspacing="0" width="50%" align="center">
            <tr>
            	<th>Nombre</th>
            	<th>Nota</th>
            </tr>
            <?php

            $alumnos = array('Juan'=>5, 'Martin'=>7, 'Nicolas'=>10, 'Miguel'=>2, 'Carlos'=>8 );
            $indice_maximo = 'Juan';
            $indice_minimo = 'Juan';
            $sumatoria = 0;
            
            foreach ($alumnos as $nombre=>$nota) {
            	
            	/*
            	Bonus: definir un color para los desaprobados y otro para los que aprobaron con mas de 7
            	*/
            	$css_color = 'black';
            	if($nota < 4){
            	    $css_color = 'red';
            	} else if($nota > 7){
            	    $css_color = 'green';
            	}
            	
            	/*
            	Noten como la variable $css_color se imprime dentro de la propiedad style="" del HTML
            	Una opción m´s profesional ser´a adjudicar una clase CSS, "desaprobado" y "buen-promedio" para que un diseñador asigne los colores, pero escapa del ejercicioá
í           	*/
            	echo "
            	<tr>
            	    <td>$nombre</td>
            	    <td style='color: $css_color'>$nota</td>
            	</tr>
            	";
            	
            	if ( $nota > $alumnos[$indice_maximo] ){
            	    $indice_maximo = $nombre;
            	}
        		
        		if ( $nota < $alumnos[$indice_minimo] ){
            		$indice_minimo = $nombre;
        		}
            
            	$sumatoria += $nota;
            }
            
            $promedio = $sumatoria / count($alumnos);
            
            /* las comillas dobles permiten incluso acceder a arrays sin necesidad de abrir/cerrar el String */
            echo "
            <tr>
            	<td>Nota Maxima:</td>
            	<td>$alumnos[$indice_maximo]</td>
            </tr>
            <tr>
            	<td>Nota Minima:</td>
            	<td>$alumnos[$indice_minimo]</td>
            </tr>
            <tr>
            	<td>Nota Promedio:</td>
            	<td>$promedio</td>
            </tr>";
            
            ?>
            
        </table>
        
    </body>
</html>