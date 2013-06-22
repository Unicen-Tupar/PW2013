<!DOCTYPE HTML>
<?php
//Configuraci�n
$host 	= "localhost";
$db	= "broms";
$user	= "root";
$pass	= "";
//Conexi�n
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
//Consulta - Parametros Posicionales
$sql = "SELECT * 
		FROM posts 
		ORDER BY Fecha
		LIMIT 5";
$q = $conn->prepare($sql);
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}
//fetch
while($r = $q->fetch()){
print_r($r);
}
?>
<html>
	
	<head>
	<link rel="stylesheet" href="styles/broms-css.css">
	</head>
	
	<body>
	
		<header>
		<image src="styles/images/header.gif"/>
		</header>
	
		<nav><!--Search box-->
			<button type="button" id="search-button-movie"><image src="styles/images/peliculas.png"></button>
			<button type="button" id="search-button-serie"><image src="styles/images/series.png"></button>
			<button type="button" id="search-button-game"><image src="styles/images/juegos.png"></button>
		</nav>
	
		<div class="content">
			<div class="post">
				<div class="datbox"><!--Box with date and title-->
					<div class="title">
						<div id="dateblock">	Abril	<div id="day">	25	</div>	</div>
						<div id="post-title">	Star Wars Saga	</div>
						<div id="post-details">	Posteado En: Broms, Peliculas por Blackjak	</div>
					</div>
				</div>
				
				<div class="datbox"><!--Image of the post-->
				<img src="http://1.bp.blogspot.com/-0DirxW00v28/Tx7RjwpbvBI/AAAAAAAABVM/jtqY73zi0NA/s1600/StarWars-Saga6.jpg" alt="Star Wars Saga" width="629">
				</div>
				
				<div class="datbox"><!--Info of the post-->
					<div class="info">
						<b>T�TULO ORIGINAL:</b> <br>
						<b>OTROS T�TULOS:</b> <br>
						<b>A�O:</b> <br>
						<b>DURACI�N:</b> <br>
						<b>PA�S:</b> <br>
						<b>DIRECTOR:</b> <br>
						<b>GUI�N:</b> <br>
						<b>M�SICA:</b> <br>
						<b>FOTOGRAF�A:</b> <br>
						<b>REPARTO:</b> <br>
						<b>G�NERO:</b> <br>
						<b>FECHA DE ESTRENO CANAD�:</b> <br>
						<b>FECHA DE ESTRENO USA:</b> <br>
						<b>FECHA DE ESTRENO M�XICO:</b> <br>
						<b>FECHA DE ESTRENO ESPA�A:</b> <br>
					</div>
				</div>
				<div class="datbox">
					<div class="tec"><!--Tecnical dates of the post-->
					<b>Star Wars Saga (1978-2013)</b><br>
					BDRip 720p | XviD | x264 | AC3 5.1 | DTS | 3.1 GB | 4.1 GB | Audios: Espa�ol Latino, Ingl�s | Subt�tulos: Espa�ol, Ingl�s | Ciencia-Ficcion | 2013 | NFO 
					</div>
				</div>
				<div class="datbox">
					<div class="descrip"><!--Description of the post-->
					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
					</div>
					<button type="button" class="go-post" onclick="javascript:self.location='post1.html?id=1';">Ir al post</button>
				</div>
			</div>
			<div class="post">
				<div class="datbox"><!--Box with date and title-->
					<div class="title">
						<div id="dateblock">	Abril	<div id="day">	25	</div>	</div>
						<div id="post-title">	Evangelion 3.33 You Can (Not) Redo (2012) 720p BDRip Subt�tulos Espa�ol	</div>
						<div id="post-details">	Posteado En: Broms, Peliculas por Blackjak	</div>
					</div>
				</div>
				
				<div class="datbox"><!--Image of the post-->
				<img src="http://4.bp.blogspot.com/-qa-ov-HL9gw/UXc3cbbA77I/AAAAAAAA3bI/rCCfnLMKgP0/s400/Evangelion+3.33+You+Can+(Not)+Redo+2013+1080P+Blu-ray+AVC+LPCM+5.1.png" alt="Star Wars Saga" width="629">
				</div>
				
				<div class="datbox"><!--Info of the post-->
					<div class="info">
						<b>T�TULO ORIGINAL: Evangelion: 3.0 You Can (Not) Redo (Evangelion 3.0: Q Quickening)</b> <br>
						<b>A�O: 2012</b> <br>
						<b>DURACI�N: 96 min.</b> <br>
						<b>PA�S: Jap�n</b> <br>
						<b>DIRECTOR: Hideaki Anno</b> <br>
						<b>GUI�N: Hideaki Anno</b> <br>
						<b>M�SICA: Shiro Sagisu</b> <br>
						<b>FOTOGRAF�A: Animation</b> <br>
						<b>G�NERO:Animaci�n. Ciencia ficci�n. Drama. Acci�n | Remake. Secuela. Robots</b> <br>
						</div>
				</div>
				<div class="datbox">
					<div class="tec"><!--Tecnical dates of the post-->
					<b>Evangelion 3.33 You Can (Not) Redo (2012)</b><br>
					BDRip 720p | XviD | x264 | AC3 5.1 | 2.1 GB | 3.2 GB | Audio: Japon�s | Subt�tulos: Espa�ol | Animaci�n | 2012 | NFO					</div>
				</div>
				<div class="datbox">
					<div class="descrip"><!--Description of the post-->
					Evangelion 3.0 es la tercera entrega de la tetralog�a �Rebuild Of Evangelion� y los cap�tulos que re-adaptaran a la pantalla grande seran desde el 20 al 24 en el cual los sucesos m�s transcendentes van desde la operaci�n de rescate de Shinji y Rei quienes se encuentran absorbidos dentro del EVA unidad 01, la pelea espacial que se da entre el d�cimo �ngel Arael y el EVA unidad 02 piloteado nuevamente por Asuka y el ataque del ultimo �ngel Kaworu Nagisa al dogma central de Nerv con su propio EVA unidad 06.					</div>
				<button type="button" class="go-post" onclick="javascript:self.location='post2.html?id=1';">Ir al post</button>
				</div>
			</div>
			<div class="post">
				<div class="datbox"><!--Box with date and title-->
					<div class="title">
						<div id="dateblock">	Abril	<div id="day">	24	</div>	</div>
						<div id="post-title">	Mama (2013) 720p BDRip Dual Espa�ol Latino-Ingl�s</div>
						<div id="post-details">	Posteado En: Broms, Peliculas por Blackjak	</div>
					</div>
				</div>
				
				<div class="datbox"><!--Image of the post-->
				<img src="http://2.bp.blogspot.com/-RQk_FS9bJDY/UXi1uVr-r3I/AAAAAAAA3bY/eAV1vOW88WQ/s400/Mama+(2012)+BD.jpg" alt="Star Wars Saga" width="629">
				</div>
				
				<div class="datbox"><!--Info of the post-->
					<div class="info">
						<b>T�TULO ORIGINAL: Mama</b> <br>
						<b>OTROS T�TULOS: Mam�</b> <br>
						<b>A�O: 2013</b> <br>
						<b>DURACI�N: 100 min.</b> <br>
						<b>PA�S: Canad�</b> <br>
						<b>DIRECTOR: Andr�s Muschietti</b> <br>
						<b>GUI�N: Andr�s Muschietti, Neil Cross, Barbara Muschietti (Historia: Andr�s Muschietti, Barbara muschietti)</b> <br>
						<b>M�SICA: Fernando Vel�zquez</b> <br>
						<b>FOTOGRAF�A: Antonio Riestra</b> <br>
						<b>REPARTO: Jessica Chastain, Nikolaj Coster-Waldau, Megan Charpentier, Isabelle Nelisse, Daniel Kash, Javier Botet, Jane Moffat, Morgan McGarry, David Fox, Dominic Cuzzocrea</b> <br>
						<b>G�NERO: Terror. Thriller | Sobrenatural. Fantasmas</b> <br>
						<b>FECHA DE ESTRENO CANAD�:	18 de enero de 2013</b> <br>
						<b>FECHA DE ESTRENO USA:	18 de enero de 2013</b> <br>
						<b>FECHA DE ESTRENO M�XICO: 1 de febrero de 2013</b> <br>
						<b>FECHA DE ESTRENO ESPA�A: 8 de febrero de 2013</b> <br>
					</div>
				</div>
				
				<div class="datbox">
					<div class="tec"><!--Tecnical dates of the post-->
					<b>Mama (2013) </b><br>
					BDRip 720p | XviD | x264 | AC3 5.1 | DTS | 3.1 GB | 4.1 GB | Audios: Espa�ol Latino, Ingl�s | Subt�tulos: Espa�ol, Ingl�s | Terror | 2013 | NFO 					</div>
				</div>
				<div class="datbox">
					<div class="descrip"><!--Description of the post-->
					Hace cinco a�os, el mismo d�a en que su madre fue asesinada, las peque�as Victoria y Lilly desaparecieron en el bosque. Buscadas incansablemente por su t�o Lucas (Nikolai Coster-Waldau) y su novia Annabel (Jessica Chastain), son encontradas unos a�os m�s tarde. Comienzan entonces una nueva vida de la mano de Annabel, pero pronto descubren que alguien o algo misterioso las sigue arropando por las noches.					</div>
					<button type="button" class="go-post" onclick="javascript:self.location='post3.html?id=1';">Ir al post</button>
				</div>
			</div>
			<div class="post">
				<div class="datbox"><!--Box with date and title-->
					<div class="title">
						<div id="dateblock">	Abril	<div id="day">	25	</div>	</div>
						<div id="post-title">	Star Wars Saga	</div>
						<div id="post-details">	Posteado En: Broms, Peliculas por Blackjak	</div>
					</div>
				</div>
				
				<div class="datbox"><!--Image of the post-->
				<img src="http://1.bp.blogspot.com/-0DirxW00v28/Tx7RjwpbvBI/AAAAAAAABVM/jtqY73zi0NA/s1600/StarWars-Saga6.jpg" alt="Star Wars Saga" width="629">
				</div>
				
				<div class="datbox"><!--Info of the post-->
					<div class="info">
						<b>T�TULO ORIGINAL:</b> <br>
						<b>OTROS T�TULOS:</b> <br>
						<b>A�O:</b> <br>
						<b>DURACI�N:</b> <br>
						<b>PA�S:</b> <br>
						<b>DIRECTOR:</b> <br>
						<b>GUI�N:</b> <br>
						<b>M�SICA:</b> <br>
						<b>FOTOGRAF�A:</b> <br>
						<b>REPARTO:</b> <br>
						<b>G�NERO:</b> <br>
						<b>FECHA DE ESTRENO CANAD�:</b> <br>
						<b>FECHA DE ESTRENO USA:</b> <br>
						<b>FECHA DE ESTRENO M�XICO:</b> <br>
						<b>FECHA DE ESTRENO ESPA�A:</b> <br>
					</div>
				</div>
				<div class="datbox">
					<div class="tec"><!--Tecnical dates of the post-->
					<b>Star Wars Saga (1978-2013)</b><br>
					BDRip 720p | XviD | x264 | AC3 5.1 | DTS | 3.1 GB | 4.1 GB | Audios: Espa�ol Latino, Ingl�s | Subt�tulos: Espa�ol, Ingl�s | Ciencia-Ficcion | 2013 | NFO 
					</div>
				</div>
				<div class="datbox">
					<div class="descrip"><!--Description of the post-->
					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
					</div>
					<button type="button" class="go-post" onclick="javascript:self.location='post1.html?id=1';">Ir al post</button>
				</div>
			</div>
			<div class="post">
				<div class="datbox"><!--Box with date and title-->
					<div class="title">
						<div id="dateblock">	Abril	<div id="day">	25	</div>	</div>
						<div id="post-title">	Star Wars Saga	</div>
						<div id="post-details">	Posteado En: Broms, Peliculas por Blackjak	</div>
					</div>
				</div>
				
				<div class="datbox"><!--Image of the post-->
				<img src="http://1.bp.blogspot.com/-0DirxW00v28/Tx7RjwpbvBI/AAAAAAAABVM/jtqY73zi0NA/s1600/StarWars-Saga6.jpg" alt="Star Wars Saga" width="629">
				</div>
				
				<div class="datbox"><!--Info of the post-->
					<div class="info">
						<b>T�TULO ORIGINAL:</b> <br>
						<b>OTROS T�TULOS:</b> <br>
						<b>A�O:</b> <br>
						<b>DURACI�N:</b> <br>
						<b>PA�S:</b> <br>
						<b>DIRECTOR:</b> <br>
						<b>GUI�N:</b> <br>
						<b>M�SICA:</b> <br>
						<b>FOTOGRAF�A:</b> <br>
						<b>REPARTO:</b> <br>
						<b>G�NERO:</b> <br>
						<b>FECHA DE ESTRENO CANAD�:</b> <br>
						<b>FECHA DE ESTRENO USA:</b> <br>
						<b>FECHA DE ESTRENO M�XICO:</b> <br>
						<b>FECHA DE ESTRENO ESPA�A:</b> <br>
					</div>
				</div>
				<div class="datbox">
					<div class="tec"><!--Tecnical dates of the post-->
					<b>Star Wars Saga (1978-2013)</b><br>
					BDRip 720p | XviD | x264 | AC3 5.1 | DTS | 3.1 GB | 4.1 GB | Audios: Espa�ol Latino, Ingl�s | Subt�tulos: Espa�ol, Ingl�s | Ciencia-Ficcion | 2013 | NFO 
					</div>
				</div>
				<div class="datbox">
					<div class="descrip"><!--Description of the post-->
					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
					</div>
					<button type="button" class="go-post" onclick="javascript:self.location='post1.html?id=1';">Ir al post</button>
				</div>
			</div>
		</div>
		<aside><!--Aside bar of the web-->
			<form action="demo_form.asp" method="get">
				<div class="form-title">REGISTRATE!</div>
				<table border="0">
				<tr>
					<th>Nombre:</th>
					<th><input type="text" name="nombre"><br></th>
				</tr><tr>
					<th>Username:</th>
					<th><input type="text" name="username"><br></th>
				</tr><tr>
					<th>Password:</th>
					<th><input type="password" name="password"><br></th>
				</tr><tr>
					<th>Mail:</th>
					<th><input type="mail" name="mail"><br></th>
				</tr><tr>
					<th>Fecha de Nacimiento:</th>
					<th><input type="date" name="fechaNac"><br></th>
				</tr>
				</table>
				<div class="submit-form"><input type="submit" value="Enviar"></div>
			</form><br>
			Archivos
				<li>Abril 2013 </li>
				<li>Mayo 2013 </li>
		</aside>
	
		<footer>
		<button type="button" id="goto-heaven" value="IR AL CIELO" onclick="scrollTo(0)">IR AL CIELO</button><br>
		<div id="footer-text">		
		� Broms Web 2013
		</div>
		</footer>
	</body>

</html>