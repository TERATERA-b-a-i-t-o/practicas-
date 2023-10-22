<html>
    <head>
        <meta charset='utf-8'>
        <title>Facturación máxima</title>
        <style>
            h1 {
                text-align: center;
            }
        </style>
    </head>
    <body>
    
        <h1>Lab 2</h1>
        
        
        <table border="1" cellpadding="10" cellspacing="0" width="50%" align="center">
            <tr>
            	<th>Indice</th>
            	<th>Valor</th>
            </tr>
            <?php
            
            //si bien pueden utilizarse comillas dobles para definir Strings, nos conviene siempre utilizar simples, a menos que querramos realizar reemplazos
            $nombres = array('Juan', 'Martin', 'Nicolas', 'Miguel', 'Carlos');
            sort($nombres);
            
            foreach ($nombres as $indice=>$valor) {
            	/*
            	    al usar comillas dobles en el echo, podemos incluir saltos de linea y tabulaciones, 
            	    as´ como reemplazos de variables sin necesidad de abrir/cerrar el Stringí
            	*/
            	echo "
            	<tr>
            	    <td>$indice</td>
            	    <td>$valor</td>
            	</tr>";
            }
            
            ?>
        </table>
    
    </body>
</html>