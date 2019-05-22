{include file="templates/header.tpl"}
{include file="templates/NavBar.tpl"}




<div class="container">
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
      <input type="" class=" hidden id_usuario_form" id="id_usuario_form" name="id_usuario_form" value="{$usuario['id_usuario']}">

    </div>
    <button type="sumbit" name="button"  id="boton">Submit</button>
  </form>
</div>
