{include file="templates/header.tpl"}
{include file="templates/NavBar.tpl"}


<!-- este es el div donde se va a mostrar el mapa -->
    <div id="map" class="mx-auto" style="width: 1120px; height: 580px; background: grey" </div>


<!-- cree un tpl para ver el mapa del jefe y otro tpl para ver cada mapa de los usuario, ahora te explico como funciona este: -->

<!-- Mediante el form se ingresa la latitud, longitud y la descripcion del marcador que quieras poner  -->
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
<!-- Este input sirve para saber con que id_usuario se va a insertar la denuncia en la base de datos -->
      <input type="" class=" hidden id_usuario_form" id="id_usuario_form" name="id_usuario_form" value="{$usuario['id_usuario']}">

    </div>
    <button type="sumbit" name="button"  id="boton">Submit</button>
  </form>
</div>


<div class="">

<!-- Aca traigo todas las denuncias correspondientes del usuario al tpl, las pongo en modo oculto y les pongo un id segun el tipo de datos que es sumado al id de la denuncia
de esta manera se pueden asignar en el mapa mediante su id, usando el archivo javascript que se llama "api.js" -->
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


  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
  <script type="text/javascript" src="js/api.js"></script>
