<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplos php</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
	<?php
		function sueldo_neto($bruto){
			$neto = $bruto -($bruto * 0.17);
			return $neto;
		}
		//echo "el sueldo neto es ".sueldo_neto(50000);
		$aEmpleados = array();
		$aEmpleados[] = array("DNI" => 33300123,"Nombre" => "David Garcia","Bruto" => 85000.30);
		$aEmpleados[] = array("DNI" => 40874456,"Nombre" => "Ana Del Valle","Bruto" => 90000);
		$aEmpleados[] = array("DNI" => 45350124,"Nombre" => "Oscar Villalba","Bruto" => 75000);
		$aEmpleados[] = array("DNI" => 56210443,"Nombre" => "Martin Gomez","Bruto" => 79000);
		$aEmpleados[] = array("DNI" => 23124068,"Nombre" => "Lautaro Higgs","Bruto" => 88500);

		echo "<table class = 'table table-bordered'>";
		echo "<tr>"."<th>"."DNI"."</th>"."<th>"."Nombre"."</th>"."<th>"."Sueldo Bruto"."</th>"."</tr>";

		foreach($aEmpleados as $empleado){
			echo "<tr>"."<td>".$empleado["DNI"]."</td>"."<td>".$empleado["Nombre"]."</td>"."<td>".sueldo_neto($empleado["Bruto"])."</td>"."</tr>";
		}

		echo "</table>";
	?>
</body>
</html>
