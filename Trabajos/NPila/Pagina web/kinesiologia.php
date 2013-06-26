<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Kinesiologia</title>
		<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
							<div class="post">
								<h2 class="title">Ingrese el nombre del paciente </h2>
							</div>
							<div id="search" >
								<form method="get" action="#">
									<div>
										<input type="text" name="s" id="search-text" value="" />
										<input type="submit" id="search-submit" value="GO" />
									</div>
								</form>
								<?php
									include();
								?>
							</div>
							<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
						</div>
						<div id="sidebar">
							<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Kinesiologia</a></h1>
							</div>
							<nav id="menu">
								<ul>
									<li><a href="index.html">Inicio</a></li>
									<li><a href="turnosk.html">Turnos</a></li>
								</ul>
							</nav> 
							<!-- FIN BARRA LATERAL -->
						</div>
						<div style="clear: both;">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>