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
		
			public function guardaTurno($formulario)
				{
					print("llegue");
					/*$arrfecha = explode('/',$formulario['Fecha']);/*Buscar funcion para rearmar el string (cadena a array) $formulario['Fecha'] */
					/*$fecha = $arrfecha[2].$arrfecha[0].$arrfecha[1];
					$arrhora = explode(':',$formulario['Fecha']);
					$hora = $arrhora[0].$arrhora[0]."00";*/$fecha ="20030303"; $hora ="140000";
					$sql = "INSERT INTO Turnos VALUES (NULL,'".$formulario['Nombre_apellido']."','".$fecha."','".$hora."');";
					$resultado = $this->conn->prepare($sql);
					$resultado->execute();
					if (!$resultado)
						{
							die(print($this->conn->errorInfo()[2]));
						}
				}
		}
?>
