{include file="templates/header.tpl"}
{include file="templates/NavBar.tpl"}
    <h1>{$Titulo}</h1>
    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="AgregarDenuncia">

        <div class="form-group">
          <label for="ubicacionForm">Ubicación</label>
          <input type="text" class="form-control" id="ubicacionForm" name="ubicacionForm">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripción</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
        </div>
        <div class="form-group">
      <label for="imagenForm">Imagen</label>
    <input type="file" id="imagenes" name="imagenForm">
      </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
    </div>

{include file="templates/footer.tpl"}
