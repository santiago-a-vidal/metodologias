{include file="templates/header.tpl"}
{include file="templates/NavBarLogeadoJefe.tpl"}




    <div id="map" class="mx-auto" style="width: 1120px; height: 580px; background: grey" </div>



<div class=" ">


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


<div class="listaDenuncias">



<table>
  {foreach from=$denuncias item=denuncia}
  <tr>
  <td>Descripcion:  {$denuncia['descripcion']}</td>

  <td> latitud {$denuncia['latitud']} </td>
  <td> longitud{$denuncia['longitud']}</td>

  </tr>
  {/foreach}
</table>

</div>


  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
  <script type="text/javascript" src="js/api.js"></script>
