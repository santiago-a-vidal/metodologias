<?php
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2019-05-23 00:36:59
=======
/* Smarty version 3.1.33, created on 2019-05-22 23:12:52
>>>>>>> 6d3605087ef98717a9f2efb7bd076a0fdd715a33
  from 'C:\xampp\htdocs\metodologias\templates\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
  'unifunc' => 'content_5ce5cf0bb19315_27021103',
=======
  'unifunc' => 'content_5ce5bb54d4e400_53141102',
>>>>>>> 6d3605087ef98717a9f2efb7bd076a0fdd715a33
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1aa72405e9f81af703f12129b247fc2e9b2d1fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologias\\templates\\formulario.tpl',
<<<<<<< HEAD
      1 => 1558564616,
=======
      1 => 1558559515,
>>>>>>> 6d3605087ef98717a9f2efb7bd076a0fdd715a33
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
<<<<<<< HEAD
function content_5ce5cf0bb19315_27021103 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5ce5bb54d4e400_53141102 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 6d3605087ef98717a9f2efb7bd076a0fdd715a33
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <div class="container formu">
      <h2>Formulario</h2>
      <form method="post" action="AgregarDenuncia">
        <div class="form-group">
          <label for="longitudForm">Longitud</label>
          <input type="text" class="form-control" id="longitudForm" name="longitudForm">
        </div>
        <div class="form-group">
          <label for="latitudForm">Latitud</label>
          <input type="text" class="form-control" id="latitudForm" name="latitudForm">
        </div>

        <div class="form-group">
          <label for="descripcionForm">Descripción</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
        </div>
        <div class="form-group">
      <label for="imagenForm">Imagen</label>
    <input type="file" id="imagenes" name="imagenForm">
      </div>
<<<<<<< HEAD
      <input type="" class=" hidden id_usuario_form" id="id_usuario_form" name="id_usuario_form" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>

    <form method="post" action="AgregarDenuncia">
      <div class="form-group">
        <label for="exampleInputEmail1">Longitud</label>
        <p>-37.33167</p>
        <input type=""   class="longitudForm" id="longitudForm" name="longitudForm" >
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Latitud</label>
        <p>-59.13316</p>
        <input type=""  class="latitudForm" id="latitudForm" name="latitudForm" >
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Informacion</label>
        <input type="text"  class="descripcionForm" id="descripcionForm" name="descripcionForm"   >
  <!-- Este input sirve para saber con que id_usuario se va a insertar la denuncia en la base de datos -->
        <input type="" class=" hidden id_usuario_form" id="id_usuario_form" name="id_usuario_form" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
">

      </div>
      <button type="sumbit" name="button"  id="boton">Submit</button>
    </form>
  </div>

=======
        <button type="submit" class="btn btn-primary">cacacacaca</button>
      </form>
    </div>

>>>>>>> 6d3605087ef98717a9f2efb7bd076a0fdd715a33

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
