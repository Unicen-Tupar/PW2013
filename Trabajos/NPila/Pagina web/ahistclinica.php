<?php
	require('./libs/Smarty.class.php');	
	$smarty = new Smarty;
	$smarty->caching = true;
	$smarty->cache_lifetime = 120;
	$smarty->display('ahistclinica.tpl');
?>
