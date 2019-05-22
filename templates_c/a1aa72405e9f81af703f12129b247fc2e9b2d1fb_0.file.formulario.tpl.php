<?php
/* Smarty version 3.1.33, created on 2019-05-22 22:42:24
  from 'C:\xampp\htdocs\metodologias\templates\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce5b430bba3f8_92246165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1aa72405e9f81af703f12129b247fc2e9b2d1fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologias\\templates\\formulario.tpl',
      1 => 1558557737,
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
function content_5ce5b430bba3f8_92246165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="AgregarDenuncia">

        <div class="form-group">
          <label for="ubicacionForm">Ubicación</label>
          <input type="text" class="form-control" id="ubicacionForm" name="ubicacionForm">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripción</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
        </div>
        <div class="form-group">
      <label for="imagenForm">Imagen</label>
    <input type="file" id="imagenes" name="imagenForm">
      </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
