<?php
	include './models/model_admin.php';
	include './views/view_admin.php';
	include './controllers/controller_admin.php';
	$model = new Modeladmin();
	$view = new Viewadmin();
	$controller = new Controlleradmin($model, $view);
	session_start();
	if (isset($_POST["rep"]))
	{
		$controller->imprimirTablarep();
	}
	else if (isset($_POST["cli"]))
	{
		$controller->imprimirTablacli();
	}
	else if (isset($_POST["buscar"]))
	{
		$controller->imprimirBuscador();
	}
	else if (isset($_POST["nuevarep"]))
	{
		$controller->imprimirFormrep();
	}
	else if (isset($_POST["nuevocli"]))
	{
		$controller->imprimirFormcli();
	}
	else if (isset($_POST["id_reparacion"]))
	{
		$controller->imprimirDetallerep($_POST["id_reparacion"]);
	}
	else if (isset($_POST["id_cliente"]))
	{
		$controller->imprimirDetallecli($_POST["id_cliente"]);
	}
	else if (isset($_POST["tipobusqueda"]))
	{
		if ($_POST["tipobusqueda"] == 'reparacion')
		{
			if (isset($_POST["campobusqueda"]))
			{
				$controller->imprimirBusquedarep($_POST["valor"],$_POST["valor2"],$_POST["campobusqueda"]);
			}
		}
		else
		{
			if (isset($_POST["campobusqueda"]))
			{
				$controller->imprimirBusquedacli($_POST["valor"],$_POST["valor2"],$_POST["campobusqueda"]);
			}
		}
	}
	else if (isset($_POST["nombre"]))
	{
		$controller->insertaCli($_POST);
	}
	else if (isset($_POST["id"]))
	{
		$controller->actualizaCli($_POST);
	}
	else if (isset($_POST["id_rep"]))
	{
		$controller->actualizaRep($_POST);
	}
	else if (isset($_POST["id_delcli"]))
	{
		$controller->borrarCli($_POST["id_delcli"]);
	}
	else if (isset($_POST["id_delrep"]))
	{
		$controller->borrarRep($_POST["id_delrep"]);
	}
	else if (isset($_POST["articulo"]))
	{
		$controller->insertaRep($_POST);
	}
	else if (isset($_SESSION["username"]))
	{
		$controller->imprimirPagina();
	}
?>