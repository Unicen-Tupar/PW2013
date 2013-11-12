<?php
	require('./libs/Smarty.class.php');
	class View
	{
			private $smarty;

		    public function __construct()
				{
					$this->smarty = New Smarty;
				}

			public function imprimirPaginaCons()
				{
					$this->smarty->display('turnos.tpl');
				}

			public function imprimirPaginaDar()
				{
					$this->smarty->display('dar_turnos.tpl');
				}

			public function muestraTurnos($info)
				{
					$this->smarty->assign("datos", $info);
					$this->smarty->display('consulta_turnos.tpl');
				}
	}
?>
