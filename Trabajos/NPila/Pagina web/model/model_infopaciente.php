<?php
	class Model
	{ 
		private $conn;
	    
		public function __construct()
			{
				include ('./conexion.php');
				try
					{
						$this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
					}
				catch(PDOException $pe)
					{
						die('Error de conexion, Mensaje: ' .$pe->getMessage());
					}
			}
		
	public function consultaPaciente($nombre)
		{	
			$sql = "SELECT * FROM Paciente WHERE Nombre_Apellido = '$nombre'";
			$resultado = $this->conn->prepare($sql);
			$resultado->execute();
			if(!$resultado)
				{
					die(print($this->conn->errorInfo()[2]));
				}
			$resultado=$resultado->fetch(PDO::FETCH_ASSOC);
			return $resultado;
		}
		

	
	}
?>
