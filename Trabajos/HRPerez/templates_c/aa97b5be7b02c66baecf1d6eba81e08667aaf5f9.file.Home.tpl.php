<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 19:09:42
         compiled from "./templates/Home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8169595195271a61b281621-75948102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa97b5be7b02c66baecf1d6eba81e08667aaf5f9' => 
    array (
      0 => './templates/Home.tpl',
      1 => 1384279736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8169595195271a61b281621-75948102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5271a61b437641_83593106',
  'variables' => 
  array (
    'Seccion' => 0,
    'Noticia' => 0,
    'Tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5271a61b437641_83593106')) {function content_5271a61b437641_83593106($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/opt/lampp/htdocs/HRPerez/libs/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>

<nav class="breadcrumbs">
      <a href="index.php">
        <div class="large-6 columns"></div></a>
        <a href="index.php">Home</a>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['name'] = 'secciones';
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Seccion']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['total']);
?>
        <a href="javascript:getNoticias(<?php echo $_smarty_tpl->tpl_vars['Seccion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['secciones']['index']]['id_seccion'];?>
)"><?php echo $_smarty_tpl->tpl_vars['Seccion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['secciones']['index']]['nombre_seccion'];?>
</a>
		<?php endfor; endif; ?>
      
</nav>

  <div class="row">
    <div class="large-12 columns">
      <div class="nav-bar right">
       <ul class="button-group">
         <li><a href="admin_login.php" class="button">LogIn</a></li>
       </ul>
      </div>
      <h1>Tecper<small> Este es mi sitio. Disfrutelo.</small></h1>
      <hr />
    </div>
  </div>

  <!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Main Blog Content -->
    <div id= "content"class="large-9 columns" role="content">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['name'] = 'noticias';
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Noticia']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['total']);
?>
      <article>
        <div class="row">
          <div class="large-12 columns">
            <p>
      
	  <h3>
      <a href="ver_noticia_completa.php?id_noticia=<?php echo $_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['id_noticia'];?>
"><?php echo $_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['titulo'];?>
</a>
      
    </h3>
      <hr />

      
        <h6>
            <?php echo $_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['subtitulo'];?>

            </h6><br>

        <div class="row">
          <div class="large-12 columns">
            <p>
            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['cuerpo'],250,"...",true);?>

            </p>
            
          </div>
        </div>
          <div class="row">
          <div class="large-6 columns">
            
            
            
          </div>
          
        </div>
        
      </article>
<?php endfor; endif; ?>
    </div>

    <!-- End Main Content -->


    <!-- Sidebar -->

    <aside class="large-3 columns">

      <h5>Tags</h5>
      <ul class="side-nav">
	  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tags'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['name'] = 'tags';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Tag']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total']);
?>
        <li><a href="index.php?idTag=<?php echo $_smarty_tpl->tpl_vars['Tag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tags']['index']]['id_tag'];?>
"><?php echo $_smarty_tpl->tpl_vars['Tag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tags']['index']]['nombre_tag'];?>
</a></li>
	<?php endfor; endif; ?>
      </ul>

      <div class="panel">
        <h5>Biografia</h5>
        <p>Soy Hugo Perez,creador y disenador del proyecto Tecper.Dedico parte de mi tiempo a actualizar y mantener este proyecto de diseno que espero disfruten.Si quieres conocer mas de mi trabajo puedes contactarme <a href="envio_de_mail.php">aqui &rarr;</a></p>
     </div>

    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->
  <!-- Footer -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>