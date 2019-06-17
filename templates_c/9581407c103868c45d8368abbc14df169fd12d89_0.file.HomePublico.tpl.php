<?php
/* Smarty version 3.1.33, created on 2019-06-14 00:27:51
  from 'C:\xampp\htdocs\metodologias\templates\HomePublico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d02cde7461994_62059779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9581407c103868c45d8368abbc14df169fd12d89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologias\\templates\\HomePublico.tpl',
      1 => 1560464867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/NavBarLogeado.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d02cde7461994_62059779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid"
<div id="map" class="mx-auto" style="width: 1120px; height: 580px; background: grey" </div>
</div>

    <div class="listaDenuncias" hidden="hidden">
      <table>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['denuncias']->value, 'denuncia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['denuncia']->value) {
?>
        <tr>
          <td class="latitud"><?php echo $_smarty_tpl->tpl_vars['denuncia']->value['latitud'];?>
 </td>
          <td class="longitud"><?php echo $_smarty_tpl->tpl_vars['denuncia']->value['longitud'];?>
</td>
          <td class="imagen"><?php echo $_smarty_tpl->tpl_vars['denuncia']->value['imagen'];?>
</td>
          <td class="descripcion"><?php echo $_smarty_tpl->tpl_vars['denuncia']->value['descripcion'];?>
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

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
