<?php
	$unidad=$_POST["unidad"];
	$fecha=$_POST["fecha"];
	
	include("conectar.php");

	mysqli_query($conexion_bd, "INSERT INTO clases VALUES (DEFAULT,'$unidad','$fecha')");

	mysqli_close($conexion_bd);

	header("Location: ver_clases.php?ok");
?>