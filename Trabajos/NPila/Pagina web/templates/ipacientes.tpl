{include file = "head.tpl"}
	<body>
		<div id="wrapper">
			<div id="ipaciente">
				<div class="post"> 
				<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
					<h2 class="title">Ingrese los datos del paciente </h2><br> <br>
					<form id="ingresopaciente" method="post" action="">
						<legend class="title a">
							<div class="page"> 
								<input type="text" name="Nombre_Apellido"  placeholder="Nombre y Apellido" size="25">
								<input type="numeric" name="DNI" placeholder="D.N.I." size="7"><br><br>
								<input type="text" name="Localidad" placeholder="Localidad" size="15">
								<input type="text" name="Calle"  placeholder="Calle">
								<input type="numeric" name="Numero" placeholder="Nº" size="4">
								<input type="numeric" name="C_P" placeholder="C.P." size="4"><br><br>
								<input type="tel" name="Telefono"  placeholder="Telefono" size="13">
								<input type="tel" name="Movil"  placeholder="Celular" size="13">
								<input type="email" name="Mail"  placeholder="E-mail" size="20"><br><br>
								Fecha de nacimiento:											
								<input type="text" name="Fecha" id="fecha"  placeholder="MM/DD/AAAA" size="10"><br><br>
								{include file = "obr_soc.tpl"}
								Especialidad:					
								<select name="Especialidad" style="margin:0 5px 0 0">
									<option value="1">Kinesiologia</option>
									<option value="2">Nutricion</option>
								</select><br><br>
								Antecedentes: 
								<textarea name="Antecedentes" wrap="SOFT" tabindex="0" autocorrect="on"></textarea><br><br>
								<input type="submit" value="Cargar Paciente">
								<input type="button" onclick="history.back()" name="volver atrás" value="Volver">
							</div>
						</legend>
					</form>
				<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
				</div>
			</div>
			<div style="clear: both;"></div>
		</div>
	</body>
{include file = "footer.tpl"}
