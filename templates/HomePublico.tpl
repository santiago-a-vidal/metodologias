{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}
<div class="container">


    <div id="map" class="mx-auto" style="width: 1120px; height: 580px; background: grey" </div>


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

  </div>
</div>
  {include file="templates/footer.tpl"}
