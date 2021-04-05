<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Eventos</h2>
		<h2>Ingreso de fecha</h2>
		<form method="POST" action="calculo_fecha.php">
        	<input type="text" name="día" placeholder="Día" maxlength="2" required>
        	<input type="text" name="mes" placeholder="Mes" maxlength="2" required>
        	<input type="text" name="año" placeholder="Año" maxlength="4" required>
        	<input type="submit" name="Registrar">
    	</form>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>