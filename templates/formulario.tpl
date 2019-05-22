{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}

    <h1>{$Titulo}</h1>
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
    <input type="file" id="imagenes" name="imagenForm">
      </div>
<<<<<<< HEAD
      <!-- Este input sirve para saber con que id_usuario se va a insertar la denuncia en la base de datos -->
      <input type="" class=" hidden id_usuario_form" id="id_usuario_form" name="id_usuario_form" value="{$usuario['id_usuario']}">
        <button type="submit" class="btn btn-primary">Enviar</button>
=======
        <button type="submit" class="btn btn-primary">Agregar</button>
>>>>>>> 6d3605087ef98717a9f2efb7bd076a0fdd715a33
      </form>
    </div>

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


{include file="templates/footer.tpl"}
