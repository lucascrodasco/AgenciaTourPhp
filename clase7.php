<?php
	$aAlumnos = array("teresa","juan","pedro","maria");
	$strMayusculas0 = strtoupper($aAlumnos[0]);
	$strMayusculas3 = strtoupper($aAlumnos[3]);
	echo("los hombres son: ".$aAlumnos[1]." ".$aAlumnos[2]);
	echo "<br>";
	echo("las mujeres son: ".$strMayusculas3." ".$strMayusculas0);
	echo "<br>";
?>
<?php
	function recorrer_arreglo(){
		$animals = array("perro","gato","raton");
		foreach ($animals as $animal){
			echo $animal." ";
		}

		$miauto =[
			"patente" => "aa 123 hb",
			"marca" => "ford"
		];
		echo"<br>";
		foreach ($miauto as $clave => $valor){
			echo "la $clave es $valor"." ";
			echo"<br>";
		}
	}
	recorrer_arreglo();
?>

<?php
	function imprimir_pares(){
		echo "<br>";
		for ($i=0; $i < 51 ; $i+=2) { 
			echo $i;
			echo"<br>";
		}
	}
	imprimir_pares()
?>
<?php
	//prueba static
	function static_print(){
		static$numero = 0;
		return $numero++;
	}
	echo(static_print()."<br>");
	echo(static_print()."<br>");
	echo(static_print()."<br>");
?>
<?php
	function saludar($nombre,$apellido = ""){
		return "Hola $nombre $apellido";
	}
	$saludo = saludar("Ana","Perez");
	echo $saludo;
	echo"<br>";
	echo(saludar("Ricardo"));
?>
<?php
	function calcular_area_rectangulo($base,$altura){
		return $base * $altura;
	}
	echo"<br>";
	echo(calcular_area_rectangulo(20,30));
?>