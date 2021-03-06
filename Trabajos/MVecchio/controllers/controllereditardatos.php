<?php
	class Controller{
		private $view;
		private $model;

	    public function __construct($view, $model) {
			$this->model = $model;
			$this->view = $view;
		}
		public function imprimirPagina(){
			session_start();
			if (isset($_SESSION['email'])){
				$datos=$this->model->getDatosCliente($_SESSION['id_cliente']);
				if ($datos == null){
					$this->view->imprimirPagina(null);
				}
				else{
					$this->view->imprimirPagina($datos[0]);
				}
			}
			else{
				header('Location:HTTP/1.0 404 Not Found');
			}		
		}
		public function setDatos($cliente){
			$verificado = $this->verificarFormulario($cliente);
			if($verificado){
				$this->model->setDatos($cliente);
				$this->view->MensajeExito();
			}
			else{
				$this->view->MensajeError();
			}
		}
		public function verificarFormulario($formulario){
			return true;
		}
	}
?>