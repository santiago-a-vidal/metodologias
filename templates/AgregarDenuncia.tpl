{include file="templates/header.tpl"}
{include file="templates/NavBar.tpl"}
    <h1>{$Titulo}</h1>
    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="AgregarDenuncia">
        <input type="hidden" class="form-control" id="id_usuario" name="id_usuario">
        <div class="form-group">
          <label for="ubicacionForm">Ubicación</label>
          <input type="text" class="form-control" id="ubicacionForm" name="ubicacionForm">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripción</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
        </div>
        <div class="form-group">
          <label for="imagen"></label>
            <input type="file" name="imagen" accept="image/jpeg,image/gif,image/x-png" >
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
    </div>

{include file="templates/footer.tpl"}
