<?php
/* Smarty version 3.1.33, created on 2019-05-22 03:41:51
  from 'C:\xampp\htdocs\proyectos\metodologias\templates\HomeBase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce4a8df7c6f27_22640824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a6ceff75b187bd8c800d2672c3f5af9b4add42b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\metodologias\\templates\\HomeBase.tpl',
      1 => 1558488700,
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
function content_5ce4a8df7c6f27_22640824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section>
    <div class="container">
      <div class="card icono1" style="width: 18rem;">
        <img class="card-img-top" src="imagenes/jefe.png" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Jefe de cuadrilla</p>
        </div>
      </div>
      <div class="card icono2" style="width: 18rem;">
        <img class="card-img-top" src="imagenes/usuario.png" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Ciudadano</p>
        </div>
      </div>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
