<?php /*%%SmartyHeaderCode:93995251add9438982-48097954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '466dcc33a567cd1e7c81f5bde835247db88df2dd' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1381177624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93995251add9438982-48097954',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525391357e5c79_99826338',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525391357e5c79_99826338')) {function content_525391357e5c79_99826338($_smarty_tpl) {?><form id="formulariocontacto" action="enviar.php" method="POST" >
	<ul>
	    <li>
	    	<h2>Contactanos!!</h2>
			</li>
			<li>
				<label for="nombre"><span class="requerido">* </span>Nombre y &nbsp;&nbsp;Apellido:</label>
				<input type="text" id="nombre" placeholder="Nombre y Apellido" required autofocus="autofocus" />
			</li>
			<li>
	        <label for="email"><span class="requerido">* </span>Email:</label>
	        <input type="email" id="email" placeholder="Email" required />
	    </li>
	    <li>
	        <label for="telefono">&nbsp;&nbsp;Telefono:</label>
	        <input type="tel" id="telefono" placeholder="Telefono">
	    </li>
	    <li>
				<label for="asunto"><span class="requerido">* </span>Asunto:</label>
				<input type="text" id="asunto" placeholder="Asunto" required />
			</li>
	    <li>
	        <label for="mensaje"><span class="requerido">* </span>Mensaje:</label>
	        <textarea id="mensaje" cols="40" rows="6" required ></textarea>
	    </li>
	    <li>
	       <button class="botonsubmit"  type="button" onclick="verificarFormulario();">Enviar Mensaje</button>
	    </li>
	</ul>
</form>
<?php }} ?>