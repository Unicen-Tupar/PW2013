<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 20:59:24
         compiled from "./templates/amedicos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:459251153522e8072a437c4-89984724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aadcbed7df58de422fee12db929c597984209c8' => 
    array (
      0 => './templates/amedicos.tpl',
      1 => 1381184278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '459251153522e8072a437c4-89984724',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522e8072a7db20_09671598',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522e8072a7db20_09671598')) {function content_522e8072a7db20_09671598($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
							<div class="post">
							<h2 class="title">Ingrese los datos del medico </h2><br><br>
							<form name="ingresopaciente" onsubmit="return validacionip()">
								<legend class="title a">
								<div class="page"> 
									<input type="text" id="nombre"  placeholder="Nombre y Apellido" size="25">				
									<select id="especialidad" style="margin:0 5px 0 0">
									<option>Especialidad</option>
									<option value="kinesiologia">Kinesiologia</option>
									<option value="nutricion">Nutricion</option></select><br><br>
									<input type="text" id="calle"  placeholder="Calle">
									<input type="numeric" id="num" placeholder="Nº" size="4">
									<input type="text" id="localidad" placeholder="Localidad" size="15"><br><br>
									<input type="tel" id="tel"  placeholder="Telefono" size="13">
									<input type="email" id="mail"  placeholder="E-mail" size="20"><br><br>
									<input type="submit" value="Cargar Medico">
								</select><br><br>
							</div>
						</legend>
					</form>
					</div>
							<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
						</div>
						<div id="sidebar">
							<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Agregar medico</a></h1>
							</div>
							<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

							<!-- FIN BARRA LATERAL -->
						</nav>
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>