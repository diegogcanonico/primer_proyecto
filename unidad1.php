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
		<h2>Agenda de clases</h2>
		<form method="POST" action="insertar_clases.php">
        	<input type="text" name="unidad" placeholder="Unidad" maxlength="30" required>
        	<input type="date" name="fecha" placeholder="Fecha" required>
        	<input type="submit" name="Registrar">
    	</form>
	
	<?php
        if(isset($_GET['ok'])){
       		echo"<h3>La clase se ha registrado con éxito ¡Gracias!</h3>";
         }
    ?>
    </section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>