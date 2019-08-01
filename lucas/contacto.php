<?php
	include_once "header.php";
?>
		<div class="row">
			<div class="col-12">
				<h2 id="consulta">Consulta</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<blockquote>
					Para poder contestar sus consultas rogamos completar el siguiente cuadro con todos los datos requeridos.<br>
					Muchas gracias.
				</blockquote>
			</div>
		</div>
		<div class="row" id="division-formulario">
			<div class="col-12">
				<form action="contacto.php" id="form1" name="form1" method="get" class="formulario">
					<div class="panel-heading row">
						<div class="col-12">
							<h3 class="panel-title">Datos de contacto</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<label for="txtNombre">Nombre</label>
								<input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Nombre">
							</div>
						</div>
						<div class="col-4">
							<div class= "form-group">
								<label for="txtApellido">Apellido</label>
								<input type="text" id="txtApellido" name="txtApellido" class="form-control" placeholder="Apellido">
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="txtEmail">Email Address
								</label>
								<input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Enter Email">
							</div>
						</div>
					</div>
					<div class="row" >
						<div class = "col-6">
							<div class="form-group">
								<label for="lstPais">Pais</label>
								<select id="lstPais" name="lstPais" class="form-control" required>
									<option value="" selected>Seleccionar</option>
									<option value="ARG">Argentina</option>
									<option value="BRA">Brasil</option>
									<option value="BOL">Bolivia</option>
									<option value="CHI">Chile</option>
									<option value="COL">Colombia</option>
									<option value="URU">Uruguay</option>
									<option value="VEN">Venezuela</option>
								</select>
							</div>
						</div>
						<div class = "col-6">
							<div class="form-group">
								<label for = "txtTelefono">Telefono</label>
								<input type="text" id="txtTelefono" name="txtTelefono" class="form-control" placeholder="telefono">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label for="txtMensaje">Consulta</label>
								<textarea id="txtMensaje" name="txtMensaje" class="form-control" placeholder="ingrese su consulta">
								</textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<button type="submit" class="form-control btn btn-danger">Enviar</button>
							</div>
						</div>
					</div>
				</form>
			</div>	
		</div>
<?php include_once "footer.php"; ?>