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

			public function consultaId(&$id, $especialidad)
				{		
					$sql = "SELECT Id_medico
							FROM Medico
							WHERE Id_especialidad = '$especialidad'";
					$res = $this->conn->prepare($sql);
					$res->execute();
					if(!$res)
						{
							die(print($this->conn->errorInfo()[2]));
						}
					$res=$res->fetch(PDO::FETCH_ASSOC);
					$id = $res['Id_medico'];
					return $id;
				}
		
			public function guardaPaciente($formulario)
				{
					$arrfecha = explode('/',$formulario['Fecha']);
					$fecha = $arrfecha[2].$arrfecha[0].$arrfecha[1];
					$this->consultaId($idmed, $formulario['Especialidad']);
					echo($imed);
					$sql = "INSERT INTO Paciente VALUES ('".$formulario['Nombre_Apellido']."','".$formulario['DNI']."','".$formulario['Localidad']."','".$formulario['Calle']."','".$formulario['Numero']."','".$formulario['C_P']."','".$formulario['Telefono']."','".$formulario['Movil']."','".$formulario['Mail']."','".$fecha."','".$formulario['Obr_soc']."','".$formulario['Num_afiliado']."','".$formulario['Antecedentes']."','".$idmed."');";
					$resultado = $this->conn->prepare($sql);
					$resultado->execute();
					if (!$resultado)
						{
							die(print($this->conn->errorInfo()[2]));
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

			public function eliminaPaciente($idpaciente)
				{
					$sql = "DELETE FROM Paciente WHERE DNI = '$idpaciente';";
					$resultado = $this->conn->prepare($sql);
					$resultado->execute();
					if (!$resultado)
						{
							die(print($this->conn->errorInfo()[2]));
						}
				}

			public function actHistclinica($dato)
				{
					$sql = "UPDATE Paciente SET Antecedentes = '".$dato['historia']."' WHERE DNI = '".$dato['paciente']."'";
					$resultado = $this->conn->prepare($sql);
					$resultado->execute();
					if (!$resultado)
						{
							die(print($this->conn->errorInfo()[2]));
						}
				}
		}
?>
