<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 05:37:49
         compiled from ".\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:274965211389859eca5-89119947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85192c6e9f55456bef8cf932502504a0684ee09b' => 
    array (
      0 => '.\\templates\\menu.tpl',
      1 => 1384231067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274965211389859eca5-89119947',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521138985a4173_67584492',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521138985a4173_67584492')) {function content_521138985a4173_67584492($_smarty_tpl) {?>	<nav>
		<ul class="menu">
			<li><a onClick="getPage('articulo','inicio.php'); return false">Inicio</a></li>
			<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
				<li><a onClick="getPage('articulo','clientes.php'); return false">Clientes Amigos</a></li>
				<li><a onClick="getPage('articulo','links.php'); return false">Links de Inter&eacute;s</a></li>
				<li><a onClick="getPage('articulo','contacto.php'); return false">Contacto</a></li>
				<li>Mi Cuenta
					<ul class="submenu">
						<li><a onClick="getPage('articulo','editardatos.php'); return false">Editar Datos</a></li>
						<!--TO DO<li><a onClick="getPage('articulo','agregarautomotor.php'); return false">Agregar Automotor</a></li>-->
						<li><a onClick="getPage('articulo','estadotramite.php'); return false">Estado de Transferencias</a></li>
						<!--TO DO<li><a onClick="getPage('articulo','publicarautomotor.php'); return false">Publicar Automotor</a></li>-->
					</ul>
				</li>
				<?php if (!isset($_smarty_tpl->tpl_vars['usuario'])) $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['usuario']->value = 'admin'){?>
				<li><a onClick="window.location='./admin/cpanel.php'">Administrador</a></li>
				<?php }?>
			<?php }else{ ?>
				<li><a onClick="getPage('articulo','clientes.php'); return false">Clientes Amigos</a></li>
				<li><a onClick="getPage('articulo','links.php'); return false">Links de Inter&eacute;s</a></li>
				<li><a onClick="getPage('articulo','contacto.php'); return false">Contacto</a></li>
			<?php }?>
		</ul>
	</nav>				


<?php }} ?>