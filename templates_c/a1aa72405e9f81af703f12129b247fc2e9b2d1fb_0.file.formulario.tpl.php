<?php
/* Smarty version 3.1.33, created on 2019-06-13 23:27:37
  from 'C:\xampp\htdocs\metodologias\templates\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d02bfc92f0cd6_97422121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1aa72405e9f81af703f12129b247fc2e9b2d1fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologias\\templates\\formulario.tpl',
      1 => 1560461253,
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
function content_5d02bfc92f0cd6_97422121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <div class="row">
      <div class="col-6">
    <div class="container formu lat">
      <h2>Formulario</h2>
      <form method="post" role="form" action="AgregarDenuncia" enctype="multipart/form-data">
        <div class="form-group">
          <label for="latitudForm">Latitud</label>
          <input type="latitud" class="form-control coordenada" id="latitudForm" name="latitudForm" value=" " required>
        </div>
        <div class="form-group">
          <label for="longitudForm">Longitud</label>
          <input type="longitud" class="form-control coordenada" id="longitudForm" name="longitudForm" value=" " required>
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripción</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
        </div>
        <div class="form-group">
      <label for="imagenForm">Imagen</label>
    <input type="file" id="imagenForm" name="imagenForm">
      </div>
      <!-- Este input sirve para saber con que id_usuario se va a insertar la denuncia en la base de datos -->
      <input type="" class=" hidden id_usuario_form" id="id_usuario_form" name="id_usuario_form" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
">
        <button type="submit" class="btn btn-primary"  href="AgregarDenuncia" >Enviar</button>
      </form>
    </div>
    </div>

    <div class="col-6">
      <div id="map" class="mx-auto" style="width: 600px; height: 530px; background: grey" </div>
    </div>
</div>
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
 type="text/javascript" src="js/apiUser.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
