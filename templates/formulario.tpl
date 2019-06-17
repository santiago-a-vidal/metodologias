{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}

    <h1>{$Titulo}</h1>
    <div class="row">
      <div class="col-6">
    <div class="container formu lat">
      <h2>Formulario</h2>
      <form method="post" role="form" action="AgregarDenuncia" enctype="multipart/form-data">
        <div class="form-group">
          <label for="latitudForm">Latitud</label>
          <input type="latitud" class="form-control coordenada" id="latitudForm" name="latitudForm" value=" " required>
        </div>
        <div class="form-group">
          <label for="longitudForm">Longitud</label>
          <input type="longitud" class="form-control coordenada" id="longitudForm" name="longitudForm" value=" " required>
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripción</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
        </div>
        <div class="form-group">
      <label for="imagenForm">Imagen</label>
    <input type="file" id="imagenForm" name="imagenForm">
      </div>
      <!-- Este input sirve para saber con que id_usuario se va a insertar la denuncia en la base de datos -->
      <input type="" class=" hidden id_usuario_form" id="id_usuario_form" name="id_usuario_form" value="{$usuario['id_usuario']}">
        <button type="submit" class="btn btn-primary"  href="AgregarDenuncia" >Enviar</button>
      </form>
    </div>
    </div>

    <div class="col-6">
      <div id="map" class="mx-auto" style="width: 600px; height: 530px; background: grey" </div>
    </div>
</div>
</div>



<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
<script type="text/javascript" src="js/apiUser.js"></script>
{include file="templates/footer.tpl"}
