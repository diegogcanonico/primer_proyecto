<?php
	$día=$_POST["día"];
	$mes=$_POST["mes"];
	$año=$_POST["año"];
	$fecha_final=$mes."/".$día."/".$año;
	date_default_timezone_set("America/Argentina/Buenos_Aires");
	function dias_restantes($fecha_final) {
		$fecha_actual = date("m/d/Y");
		echo "Fecha actual: ".$fecha_actual;
		echo "</br>Fecha final: ".$fecha_final;
		$s = strtotime($fecha_final)-strtotime($fecha_actual);
		$d = intval($s/86400);
		if ($d>0){
			echo "</br>Días restantes hasta la fecha $fecha_final: $d.";
		} elseif ($d==0) {
			echo "</br>El día es hoy.";
		} else {
			echo "</br>El día ya pasó.";
		}
	}
	if (checkdate($mes, $día, $año)) {
		echo "<p>El día $día/$mes/$año existe.</p>";
		dias_restantes("$fecha_final");	
	} else {
		echo "<p>El día $día/$mes/$año no existe.</p>";
	}
?>