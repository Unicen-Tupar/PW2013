<?php
class Modeladmin
{ 
	private $conn;
	
	public function __construct()
	{
		include ('../variables_conexion.php');
		try
		{
			$this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
		}
		catch(PDOException $pe)
		{
			die('Error de conexion, Mensaje: ' .$pe->getMessage());
		}
	}
	public function consultaReparaciones()
	{

		$sql = "SELECT r.*,e.nombre_estado,DATE_FORMAT(r.fecha_ingreso,'%d/%m/%Y') as fecha_ingreso_f,DATE_FORMAT(r.fecha_egreso,'%d/%m/%Y') as fecha_egreso_f FROM REPARACION r,ESTADO e WHERE (e.id=r.id_estado) ORDER BY r.fecha_ingreso DESC, r.id;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $reparaciones=$resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function consultaClientes()
	{
		$sql = "SELECT * FROM CLIENTE;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function consultaClientesmin()
	{
		$sql = "SELECT id,nombre,apellido FROM CLIENTE ORDER BY apellido,nombre;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function consultaDetallerep($id_reparacion)
	{
		$sql = "SELECT r.*,c.nombre,c.telefono,c.mail,c.apellido,DATE_FORMAT(r.fecha_ingreso,'%d/%m/%Y') as fecha_ingreso_f,DATE_FORMAT(r.fecha_egreso,'%d/%m/%Y') as fecha_egreso_f FROM REPARACION r,CLIENTE c WHERE r.id = $id_reparacion AND c.id=r.id_cliente;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC);
	}
	public function consultaEstadosrep()
	{
		$sql = "SELECT id,nombre_estado FROM ESTADO;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function consultaDetallecli($id_cliente)
	{
		$sql = "SELECT * FROM CLIENTE WHERE id = $id_cliente;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC);
	}
	public function consultaBusquedarep($valor_principal,$valor_secundario,$tipo_busqueda)
	{
		if ($tipo_busqueda == 'na')
		{
			$sql = "SELECT r.*,c.nombre,c.apellido,e.nombre_estado,DATE_FORMAT(r.fecha_ingreso,'%d/%m/%Y') as fecha_ingreso_f,DATE_FORMAT(r.fecha_egreso,'%d/%m/%Y') as fecha_egreso_f FROM REPARACION r,CLIENTE c,ESTADO e WHERE (r.id_estado = e.id) AND (c.id = r.id_cliente) AND (c.nombre LIKE '$valor_principal') AND (c.apellido LIKE '$valor_secundario') ORDER BY fecha_ingreso DESC;";
		}
		else if ($tipo_busqueda == 'id_cliente')
		{
			$sql = "SELECT r.*,c.nombre,c.apellido,e.nombre_estado,DATE_FORMAT(r.fecha_ingreso,'%d/%m/%Y') as fecha_ingreso_f,DATE_FORMAT(r.fecha_egreso,'%d/%m/%Y') as fecha_egreso_f FROM REPARACION r,CLIENTE c,ESTADO e WHERE (r.id_estado = e.id) AND (r.id_cliente = $valor_principal) AND (c.id = r.id_cliente) ORDER BY fecha_ingreso DESC;";
		}
		else
		{
			$sql = "SELECT r.*,c.nombre,c.apellido,e.nombre_estado,DATE_FORMAT(r.fecha_ingreso,'%d/%m/%Y') as fecha_ingreso_f,DATE_FORMAT(r.fecha_egreso,'%d/%m/%Y') as fecha_egreso_f FROM REPARACION r,CLIENTE c,ESTADO e WHERE (r.id_estado = e.id) AND (c.id = r.id_cliente) AND (r.id = $valor_principal);";
		}
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function consultaBusquedacli($valor_principal,$valor_secundario,$tipo_busqueda)
	{
		if ($tipo_busqueda == 'na')
		{
			$sql = "SELECT * FROM CLIENTE WHERE (nombre LIKE '$valor_principal') AND (apellido LIKE '$valor_secundario') ORDER BY apellido,nombre ASC;";
		}
		else
		{
			$sql = "SELECT * FROM CLIENTE WHERE (id=$valor_principal) ORDER BY apellido,nombre ASC;";
		}
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function guardaCli($cliente)
	{
		$sql = "INSERT INTO CLIENTE VALUES (NULL,'".$cliente['nombre']."','".$cliente['apellido']."','".$cliente['direccion']."','".$cliente['telefono']."','".$cliente['mail']."');";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		$sql = "SELECT LAST_INSERT_ID();";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC)['LAST_INSERT_ID()'];
	}
	public function guardaRep($reparacion)
	{
		$sql = "INSERT INTO REPARACION VALUES (NULL,'".$reparacion['serie']."','".$reparacion['marca']."','".$reparacion['modelo']."','".$reparacion['articulo']."','".$reparacion['problema']."','".$reparacion['notas']."',".$reparacion['precio'].",CURRENT_DATE(),NULL,".$reparacion['cliente'].",".$reparacion['estado'].");";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return -1;
	}
	public function updateCli($cliente)
	{
		$sql = "UPDATE CLIENTE SET nombre = '".$cliente['nombre_n']."',apellido = '".$cliente['apellido']."',direccion = '".$cliente['direccion']."',telefono = '".$cliente['telefono']."',mail = '".$cliente['mail']."' WHERE id = ".$cliente['id']."";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return -2;
	}
	public function updateRep($reparacion)
	{
		$sql = "UPDATE REPARACION SET numero_serie = '".$reparacion['serie']."',marca = '".$reparacion['marca']."',modelo = '".$reparacion['modelo']."',articulo = '".$reparacion['articulo_n']."',desperfecto = '".$reparacion['problema']."',notas = '".$reparacion['notas']."',precio_reparacion = ".$reparacion['precio'].",id_estado = '".$reparacion['estado']."',fecha_egreso = ".$reparacion['fecha_egr']." WHERE id = ".$reparacion['id_rep']."";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return -5;
	}
	public function deleteCli($id)
	{
		$sql = "DELETE FROM CLIENTE WHERE id=$id;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return -3;
	}
	public function deleteRep($id)
	{
		$sql = "DELETE FROM REPARACION WHERE id=$id;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return -4;
	}
}
?>