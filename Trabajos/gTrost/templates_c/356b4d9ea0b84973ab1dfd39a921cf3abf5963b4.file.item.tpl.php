<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 18:05:44
         compiled from "./templates/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103726810652538b9f36c1e7-79833937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '356b4d9ea0b84973ab1dfd39a921cf3abf5963b4' => 
    array (
      0 => './templates/item.tpl',
      1 => 1384290343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103726810652538b9f36c1e7-79833937',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52538b9f3db509_26766683',
  'variables' => 
  array (
    'item_datos' => 0,
    'imagenes' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52538b9f3db509_26766683')) {function content_52538b9f3db509_26766683($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("categorias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="#">Categoría</a></li>
  <li class="active"><a href="/productos/search/<?php echo $_smarty_tpl->tpl_vars['item_datos']->value['subcat_nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['item_datos']->value['subcat_nombre'];?>
</a></li>
</ol>
<div class="productos_container">
<div class="f_item_container">
	<div class="row">
  		<div class="col-md-4">
  			<div class="f_item_fotos">
  				<div class="f_fotos_principal">
  					<img class="f_fotos_principal" id="foto_principal" src="<?php echo $_smarty_tpl->tpl_vars['imagenes']->value[0];?>
">
  				</div>
  				<div class="f_fotos_thumbs ">
  					<div class="row-fluid">
              <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
              <div class="col-md-3 item_thumb">
                <img class="item_foto" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" height=95>
              </div>                
            <?php } ?>

				    	
    				</div>
  				</div>
  			</div>
  		</div>
  		<div class="col-md-8 f_item_info">
  			<h2><?php echo $_smarty_tpl->tpl_vars['item_datos']->value['producto_nombre'];?>
</h2>
  			<h4><?php echo $_smarty_tpl->tpl_vars['item_datos']->value['precio'];?>
</h4>
  			<a href="/cart/addToCart/<?php echo $_smarty_tpl->tpl_vars['item_datos']->value['producto_id'];?>
"><button type="button" class="btn btn-default btn-lg">
  				<span class="glyphicon glyphicon-shopping-cart"></span> Agregar al Carrito
			 </button></a>
  			<p><?php echo $_smarty_tpl->tpl_vars['item_datos']->value['descripcion'];?>
</p>

  		</div>
	</div>
</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>