<?php
/* Smarty version 3.1.33, created on 2019-05-23 21:07:09
  from 'C:\xampp\htdocs\metodologias\templates\HomeJefeCuadrilla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce6ef5d2c6f07_81570399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7023034a7c2b6e2a2ee32c234361e25650a376dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologias\\templates\\HomeJefeCuadrilla.tpl',
      1 => 1558638427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/NavBarLogeadoJefe.tpl' => 1,
  ),
),false)) {
function content_5ce6ef5d2c6f07_81570399 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBarLogeadoJefe.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




    <div id="map" class="mx-auto" style="width: 1120px; height: 580px; background: grey" </div>



<div class=" ">


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['denuncias']->value, 'denuncia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['denuncia']->value) {
?>
<tbody>
  <tr>
    <input type="" class="hidden" id="latitud <?php echo $_smarty_tpl->tpl_vars['denuncia']->value['id_denuncia'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['denuncia']->value['latitud'];?>
">
    <input type="" class="hidden" id="longitud <?php echo $_smarty_tpl->tpl_vars['denuncia']->value['id_denuncia'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['denuncia']->value['longitud'];?>
">
    <input type="" class="hidden" id="descripcion <?php echo $_smarty_tpl->tpl_vars['denuncia']->value['id_denuncia'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['denuncia']->value['descripcion'];?>
">
  </tr>
</tbody>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>


<div class="listaDenuncias">



<table>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['denuncias']->value, 'denuncia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['denuncia']->value) {
?>
  <tr>
  <td>Descripcion:  <?php echo $_smarty_tpl->tpl_vars['denuncia']->value['descripcion'];?>
</td>

  <td> latitud <?php echo $_smarty_tpl->tpl_vars['denuncia']->value['latitud'];?>
 </td>
  <td> longitud<?php echo $_smarty_tpl->tpl_vars['denuncia']->value['longitud'];?>
</td>

  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

</div>


  <?php echo '<script'; ?>
 type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/api.js"><?php echo '</script'; ?>
>
<?php }
}
