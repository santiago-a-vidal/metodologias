<?php
/* Smarty version 3.1.33, created on 2019-05-22 02:17:54
  from 'C:\xampp\htdocs\metodologias\templates\HomeBase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce495325371a1_26684295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '824a51a4d3c2997c28861eec75669b77eaadb624' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologias\\templates\\HomeBase.tpl',
      1 => 1558483854,
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
function content_5ce495325371a1_26684295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                Jefe de Cuadrilla: Nick Fury
            </div>
            <div class="col-sm">
                Cliente: Steve Rogers
            </div>
            <div class="col-sm">
                Cliente: Tony Stark
            </div>
        </div>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
