<?php
	include './controllers/controller_admin_login.php';
	include './views/view_admin_login.php';
	include './models/model_admin_login.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model,$view);
	//$view->imprimirPagina();

	session_start();
	if (isset ($_POST['mail'])) 
		{

		$controller->loginUsuario($_POST);

		}
	else
		{ 

  		$controller->imprimirPagina();

		}
?>
