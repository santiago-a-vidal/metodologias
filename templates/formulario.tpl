{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}

    <h1>{$Titulo}</h1>
    <div class="row">
      <div class="col-6">
    <div class="container formu">
      <h2>Formulario</h2>
      <form method="post" action="AgregarDenuncia">
        <div class="form-group">
          <label for="longitudForm">Longitud</label>
          <input type="text" class="form-control" id="longitudForm" name="longitudForm">
        </div>
        <div class="form-group">
          <label for="latitudForm">Latitud</label>
          <input type="text" class="form-control" id="latitudForm" name="latitudForm">
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


{include file="templates/footer.tpl"}
