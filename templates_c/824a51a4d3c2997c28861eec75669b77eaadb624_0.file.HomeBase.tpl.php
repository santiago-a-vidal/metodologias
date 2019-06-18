<?php
/* Smarty version 3.1.33, created on 2019-06-18 21:15:15
  from 'C:\xampp\htdocs\metodologias\templates\HomeBase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0938435ab2c0_17944384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '824a51a4d3c2997c28861eec75669b77eaadb624' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologias\\templates\\HomeBase.tpl',
      1 => 1558570205,
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
function content_5d0938435ab2c0_17944384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section>
    <div class="container">
      <div class="row cont">
      <div class="col-6 roles">
      <div class="card icono1" style="width: 18rem;">
  <a class="nav-link active home" href="jefe">
        <img class="card-img-top" src="imagenes\jefe.png" alt="Card image cap">
                </a>
        <div class="card-body">
          <p class="card-text">Jefe de cuadrilla</p>
        </div>
      </div>
      </div>
      <div class="col-6 roles">

      <div class="card icono2" style="width: 18rem;">
        <a class="nav-link active home" href="ciudadano">
        <img class="card-img-top" src="imagenes/usuario.png" alt="Card image cap">
              </a>
        <div class="card-body">

            <p class="card-text">Ciudadano</p>
                </div>
        </div>
      </div>
    </div>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
