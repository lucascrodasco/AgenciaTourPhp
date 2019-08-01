<?php
	include_once "header.php";
?>

		<div class="row">
			<h2 id="subtitle" class="col-12" align="center">
				<em>
					El mejor viaje.
				</em>
			</h2>
		</div>
		<div class = "row">
			<p class="col-12">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
		<div class="row">
			<h2 align="center" id="promo" class="col-12">
				<strong>Promo salida grupal</strong>
			</h2>
		</div>
		<div class="divisionimagen">
			<img src="images/imagenviajes.png" alt="viajes" width="300">
		</div>
		<div class="row">
			<p align="center" class="col-12"><mark>Precio: $400 </mark></p>
		</div>
		<div class="row">
			<h2 id="video">
				video:
			</h2>
		</div>
		<div class="row">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/JZPo2RJOy5Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="col-12">		
			</iframe>
		</div>
		<div class="row">
			<h2 id="consulta">consulta
			</h2>
		</div>
		<div class = "row" id="division-formulario">
			<div class="col-12">
				<form action="" method="get" class = "formulario">
					<div class = "panel-heading" class="row">
						<div class="col-12">
							<h3 class="panel-title">Datos del contacto
							</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<label for="txtName">Nombre</label>
								<input type="txtName" id="txtName" class="form-control" placeholder="Nombre">
							</div>
						</div>
						<div class="col-4">
							<div class= "form-group">
								<label for="txtSurname">Apellido</label>
								<input type="txtSurname" id="txtSurname"
								class="form-control" placeholder="Apellido">
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for = "txtEmail">Email Address
								</label>
								<input type="email" class="form-control" id="txtEmail" placeholder="Enter Email">
							</div>
						</div>
					</div>
					<div class="row" >
						<div class = "col-6">
							<div class="form-group">
								<label for="country">Pais</label>
								<input type="country" id="country" class="form-control" placeholder="Pais">
							</div>
						</div>
						<div class = "col-6">
							<div class="form-group">
								<label for = "telefono">Telefono</label>
								<input type="telefono" id="telefono" class="form-control" placeholder="telefono">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label for="textarea">Consulta</label>
								<textarea id="textarea" class="form-control" placeholder="ingrese su consulta">
								</textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<button type="submit" class = "form-control">Enviar</button>
							</div>
						</div>
					</div>
				</form>
			</div>	
		</div>
<?php
	include_once "footer.php";
?>
</body>
</html>