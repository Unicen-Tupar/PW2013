<?php
require('./libs/Smarty.class.php');
class View
{
     
    public function imprimirPagina(){
       
		$smarty = new Smarty;
		$smarty->display('login.tpl');
    }
	
	 public function MensajeError($error){
		echo $error;
    }
}
?>T
