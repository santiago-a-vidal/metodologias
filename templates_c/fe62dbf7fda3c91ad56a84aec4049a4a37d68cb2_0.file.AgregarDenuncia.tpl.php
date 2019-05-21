<?php
/* Smarty version 3.1.33, created on 2019-05-22 00:20:19
  from 'C:\xampp\htdocs\metodologias\templates\AgregarDenuncia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce479a32e43c5_11856292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe62dbf7fda3c91ad56a84aec4049a4a37d68cb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologias\\templates\\AgregarDenuncia.tpl',
      1 => 1558476767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/NavBar.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ce479a32e43c5_11856292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="AgregarDenuncia">
        <input type="hidden" class="form-control" id="id_usuario" name="id_usuario">
        <div class="form-group">
          <label for="ubicacionForm">Ubicacion</label>
          <input type="text" class="form-control" id="ubicacionForm" name="ubicacionForm">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripcion</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
        </div>
        <div class="form-group">
          <label for="imagen"></label>
            <input type="file" name="imagen" accept="image/jpeg,image/gif,image/x-png" >
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
