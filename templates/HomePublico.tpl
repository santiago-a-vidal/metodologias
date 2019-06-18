{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}
<div class="container-fluid"
<div id="map" class="mx-auto" style="width: 1120px; height: 580px; background: grey" </div>
</div>

    <div class="listaDenuncias" hidden="hidden">
      <table>
        {foreach from=$denuncias item=denuncia}
        <tr>
            <input type="hidden" id="idForm" value="-1">
          <td class="latitud">{$denuncia['latitud']} </td>
          <td class="longitud">{$denuncia['longitud']}</td>
          <input type="hidden" id="estadoForm" value="{$denuncia['estado']}">
          <td class="imagen">{$denuncia['imagen']}</td>
          <td class="descripcion">{$denuncia['descripcion']}</td>
        </tr>
        {/foreach}
      </table>
    </div>


<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
<script type="text/javascript" src="js/api.js"></script>

{include file="templates/footer.tpl"}
