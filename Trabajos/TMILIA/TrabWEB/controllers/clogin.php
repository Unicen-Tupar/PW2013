<?php
class Controllerlogin
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function imprimirPagina()
	{
		
		if(!isset($_SESSION["mail"]))
		{
			$this->view->imprimirPagina();
			
		}
		else
		{
			header('Location: index.php');
		}
	}

	
	public function loginUsuario($formulario)
	{
	    $error = $this->verificarFormulario($formulario);
		if(!$error)
		{
			$user = $this->model->getUsuario($formulario["mail"]);

			if(empty($user))
			{
				$this->view->MensajeError("Error: Usuario Inexistente");
			} 	
			if($user[0]["password"] === md5($formulario["pass"]))
			{
				session_start();
				$_SESSION["mail"]=$formulario["mail"];
				$_SESSION['id_client'] = $user[0]['id'];
				//print_r($_SESSION['id_client']);
				header('Location: panel.php');
			}
			
			$this->view->MensajeError("Error: Password Inválida");
		}
		else
		{
			$this->view->MensajeError($error);
		}
		
	}
	
	private function verificarFormulario($formulario)
	{
		if(!$this->verificaremail($formulario["mail"]))
		{

			return "Error: Email Inválido";
			//header('Location: login.php');
		}
			
		if(strlen($formulario["pass"])<=0)
		{
			return "Error: Email Inválido";
			//header('Location: login.php');
			
		}
	}
	
	private function verificaremail($email)
	{ 
	  if (!ereg("^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$",$email)){ 
		  return false; 
	  } else { 
		   return true; 
	  } 
	}
}
?>