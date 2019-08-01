<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/clase2proyecto2.css">
	<meta charset="utf-8">
	<title>Agencia Tour</title>
</head>
<header>
	<h1>
		<p>Agencia Tour</p>
	</h1>
	
	<ul class="menu">
		<li>
			Inicio
		</li>
		<li> 
			<a href="#promo">Paquetes</a>
		</li>
		<li>
			<a href="#video">video</a>
		</li>
		<li>
			<a href="#contacto">contacto</a>
		</li>
	</ul>
</header>
<body>
	
	<h2 id="subtitle">
		<em><p align="center">El mejor viaje.</p></em>
	</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	<h2 align="center" id="promo"><strong>Promo salida grupal</strong></h2>
	<div class="divisionimagen">
		<img src="images/imagenviajes.png" alt="viajes" width="300">

	</div>
		<p align="center"><mark>Precio: $400 </mark></p>

	<h2 id="video">
		video:
	</h2>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/JZPo2RJOy5Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>		
	</iframe>
</body>
<footer>
	<h2 id="contacto">contacto
	</h2>
	<form action="" method="get">
		<fieldset>
			<legend>Datos del usuario</legend>
				<label for = "usuario"> Nombre y Apellido</label>
				<input type="txt" name="usuario" id="usuario"><br>
				<label for = "correo"> Mail </label>
				<input type="email" name="correo" id="correo"><br>
				<label for="telefono">telefono</label>
				<input type="tel" name="telefono" id="telefono"><br>
				<label for="asunto">Asunto</label>
				<select name="asunto" id="asunto">
					<option value = "ventas">
						 ventas 
					</option>
					<option value = "soporte">
						 soporte
					</option>
					<option value="otro">
						otro
					</option>

				</select><br>
				<label for="mensaje">mensaje</label>
				<textarea name="mensaje" id="mensaje">					
				</textarea><br>
				<input type="submit" value="ENVIAR">
		</fieldset>
	</form>	
	<ul>
		<li>
			<a href="mailto:info@miagencia.com">Envianos un correo</a>
		</li>
		<li>
			<a href="tel:1155663322">Llamanos</a>
		</li>
	</ul>
</footer>
</html>