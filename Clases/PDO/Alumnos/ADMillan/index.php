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
<?php
//Configuraci�n
$host 	= "localhost";
$db	= "admillan";
$user	= "root";
$pass	= "";

//Conexi�n
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
$r = $q->fetch();
print ("
  <thead>
  <tr>
	<td>$r[ID]</td>
	<td>$r[Titulo]</td>
	<td>$r[Texto]</td>
  </tr>
  </thead>
  ");
  
//Si todo sali� bien imprimo todos los registros.
while($r = $q->fetch()){
  print ("
  <tbody>
  <tr>
	<td>$r[ID]</td>
	<td>$r[Titulo]</td>
	<td>$r[Texto]</td>
  </tr>
  </tbody>
  ");
}

?>

</table>
  </div>
</body>
</html>
