{include file="templates/header.tpl"}
{include file="templates/NavBar.tpl"}




    <div id="map" class="mx-auto" style="width: 1120px; height: 580px; background: grey" </div>


<div class="">
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
    </div>
    <input type="" class="hidden id_usuario_form" id="id_usuario_form"  value="{$usuario['id_usuario']}">
    <button type="sumbit" name="button"  id="boton">Submit</button>
  </form>
</div>


<div class="">


{foreach from=$denuncias item=denuncia}
<tbody>
  <tr>
    <input type="" class="hidden" id="latitud {$denuncia['id_denuncia']}"  value="{$denuncia['latitud']}">
    <input type="" class="hidden" id="longitud {$denuncia['id_denuncia']}"  value="{$denuncia['longitud']}">
    <input type="" class="hidden" id="descripcion {$denuncia['id_denuncia']}"  value="{$denuncia['descripcion']}">
  </tr>
</tbody>
{/foreach}
</div>

<button type="button" name="button" id="boton">ACAAA</button>

  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
  <script type="text/javascript" src="js/api.js"></script>
