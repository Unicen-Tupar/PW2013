<?php
//Configuración
$host 	= "localhost";
$db	= "ejemplo";
$user	= "root";
//$pass	= "491991_454404";

//Conexión
try{

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe)
{
	die('Error de conexion, Mensaje: ' -$pe->getMessage());
}

//Consulta
$sql = "SELECT * FROM mensaje";

//Ejecucion
$q	 = $conn->query($sql);

//Si es null, hubo un error
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}

//Si todo salió bien imprimo todos los registros.
//while($r = $q->fetch()){
//  print_r($r);
//}
?>

<html>
<head>
	<title>Ejemplo PDO - PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
 <div class="container">
    <h1> Listado de Mensajes </h1>
    <table class="table table-hover">
    	<thead>
	  	<tr>
			<td>ID</td>
			<td>Titulo</td>
			<td>Mensaje</td>
	  	</tr>
  		</thead>
    	<tbody>
	  
			<?php while($r = $q->fetch()){
			print('<tr>'); 			
			print('<td>'.$r[0].'</td>');
			print('<td>'.$r[1].'</td>');
			print('<td>'.$r[2].'</td>');
			print('</tr>');
			}?>
	  
	  	
  		</tbody>
</table>
  </div>
</body>
</html>
