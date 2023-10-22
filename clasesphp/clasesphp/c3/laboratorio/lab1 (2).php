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
    
    <h1>Lab 1</h1>
    
    
    <?php
    
    $meses = array(
                'ENE'=>500, 
                'FEB'=>230, 
                'MAR'=>134, 
    			'ABR'=>425, 
    			'MAY'=>815, 
    			'JUN'=>632, 
    			'JUL'=>54, 
    			'AGO'=>105, 
    			'SEP'=>123, 
    			'OCT'=>478, 
    			'NOV'=>412, 
    			'DIC'=>953 // notar que el ultimo elemento no lleva coma
    			);
    			
    $indice_maximo = 'ENE';
    $indice_minimo = 'ENE';
    $sumatoria = 0;
    
    foreach ($meses as $mes=>$valor) {
    	
    	if ( $valor > $meses[$indice_maximo] ){
    	    $indice_maximo = $mes;
    	}
		
		if ( $valor < $meses[$indice_minimo] ){
		    $indice_minimo = $mes;
		}
    
    	$sumatoria += $valor; // equivalente a $sumatoria = $sumatoria + $valor
    }
    
    $promedio = $sumatoria / count($meses);
    
    echo '<p>Maxima Facturacion: '.$meses[$indice_maximo].'</p>';
    echo '<p>Minima Facturacion: '.$meses[$indice_minimo].'</p>';
    echo '<p>Promedio: '.$promedio.'</p>';
    
    ?>
    
    </body>
</html>