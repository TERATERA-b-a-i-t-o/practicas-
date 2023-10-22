<?php
	$titulo = "Panel de control - Proyecto integrador";
?>
<?php include("encabezado.html") ?>
</head>
<body>
	<div id="top"><img src="imagenes/top.png" alt="encabezado" width="980" height="80"></div>
	<div id="nav">
		<?php  include("menu.html") ?>
	</div>
	<div id="main">
		<table class="panel">
            <tr>
                <td class="titulo" style="padding-left: 30px">NOMBRE</td>
                <td class="titulo" style="padding-left: 15px">DESCRIPCION</td>
                <td class="titulo">PRECIO</td>
                <td class="titulo">IMAGEN</td>
                <td class="titulo" colspan="2" align="right"><a href="form-alta.php"><img class="botpanel" src="imgs/add.png" title="Agregar producto"/></a></td>
            </tr>
            <?php 
            /* INICIO DEL MUESTREO */
            include("conexion.php");
            $sql="SELECT prd_id, prd_nombre, prd_descripcion, prd_precio, prd_foto1 FROM productos";
            $resultado=mysqli_query($link,$sql);
            $cantidad=mysqli_num_rows($resultado);
            while($fila=mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
                <td class="lista" style="padding-left: 30px"><?php echo(utf8_encode($fila["prd_nombre"])); ?></td>
                <td class="lista" style="padding-left: 15px"><?php echo(utf8_encode($fila["prd_descripcion"])); ?></td>
                <td class="lista" align="right">$<?php echo($fila["prd_precio"]); ?></td>
                <td class="lista"><img src="imagenes/<?php echo($fila["prd_foto1"]); ?>" alt="<?php echo($fila["prd_nombre"]); ?>" width="200" height="130"/></td>
                <td class="lista"><a href="form-editar.php?prd_id=<?php echo($fila["prd_id"]); ?>"><img class="botpanel" src="imgs/editar3.png" title="Editar producto" /></a></td>
                <td class="lista"><a href="form-borrar.php?prd_id=<?php echo($fila["prd_id"]); ?>"><img class="botpanel" src="imgs/eliminar.png" title="Borrar producto" /></a></td>
            </tr>
            <?php /* FIN DEL MUESTREO */ 
            }
            mysql_close($link);
            ?>
            <tr><td class="pie" colspan="6">Se han encontrado <?php echo($cantidad); ?> productos</td></tr>
        </table>
		
		<br />
		<br />

	</div>
	<div id="pie">
		<?php  include("pie.php") ?>
	</div>
	
</body>
</html>