<?php
/* Smarty version 3.1.33, created on 2019-06-19 17:42:29
  from 'C:\xampp\htdocs\metodologias\templates\contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a57e585b655_26108102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1af50e6258ca46423b4e1cde9862d081ef4ef290' => 
    array (
      0 => 'C:\\xampp\\htdocs\\metodologias\\templates\\contacto.tpl',
      1 => 1560958945,
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
function content_5d0a57e585b655_26108102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid col-10 py-5 ">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./imagenes/tandil.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./imagenes/punto-limpio-2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./imagenes/27_Residuos.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./imagenes/punto-limpio.jpg" alt="Third slide">
    </div>
  </div>
</div>
<ul class="list-group">
  <li class="list-group-item">Numero telefonico :  4422071</li>
  <li class="list-group-item">Email: ambiente@tandil.gov.ar</li>
  <li class="list-group-item">Facebook: Punto Limpio Tandil</li>
  <li class="list-group-item">Horarios y direcciones</li>
  <li class="list-group-item"> Estación Centro Maipú 1250 y Estación Oeste Av. Lunghi 1950.</li>
  <li class="list-group-item">Lunes a viernes de 8hs a 16hs.
Feriados de 9hs a 12hs.</li>
</ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
