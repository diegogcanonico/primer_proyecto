<!DOCTYPE html>
<html>
<head>
	<title>Datos Cargados</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
	<?php include("botonera.php"); ?>
	<h4>
		Datos cargados en la base de datos
	</h4>
	<section id="inicio">
		<?php  
			include("conectar.php");
			$consultar=mysqli_query($conexion_bd,"SELECT * FROM clases");
			while ($mostrar=mysqli_fetch_assoc($consultar)) {
			
		?>
		<div class="clases">
			<div class="id">
				<h1>
					<?php
						echo "ID de la clase: ".$mostrar['id_clase'];
					?>
				</h1>
			</div>
			<div class="unidad">
				<h2>
					<?php
						echo "Unidad ".$mostrar['unidad'];
					?>
				</h2>
			</div>
			<div class="fecha">
				<h3>
					<?php
						echo "Fecha: ".$mostrar['fecha'];
					?>
				</h3>
			</div>	
		</div>	
	<?php } ?>
		
	</section>
</body>
</html>