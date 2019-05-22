<?php

require_once "./model/CiudadanoModel.php";
require_once "./model/JefeModel.php";
require_once "./view/CiudadanoView.php";
//require_once  "SecuredController.php";

class CiudadanoController //extends SecuredController
{
  private $view;
  private $model;
  private $modelJefe;
  private $Titulo;
  private $controllerAdmin;

  function __construct()
  {
    //parent::__construct();

    $this->model = new CiudadanoModel();
    $this->modelJefe = new JefeModel();
    $this->Titulo = "Lista de Lugares";
    $this->view = new CiudadanoView();
  }

  function Home(){
    $this->view->MostrarHome($this->Titulo);
  }
 //Todo lo relacionado a Home
  function HomeBase($message = ''){
      $Mapa = $this->model->GetDenuncias();
      $this->view->ViewBase($message, $this->Titulo, $Mapa);
  }

function VerMapa(){
$this->view->MostrarMapa();
}


  function insertarDenuncia(){ // Esta funcion toma los datos del formulario y se las envia al model
 $ubicacion = $_POST["ubicacionForm"];
 $descripcion = $_POST["descripcionForm"];
 $estado = 1;
 $id_usuario = 2;
$imagen = $_POST["imagenForm"];
//  $imagenes = $_FILES['imagenes']['tmp_name'];
$denuncia = $this->model ->GuardarDenuncia($ubicacion,$descripcion,$estado,$imagen,$id_usuario);

  header('Location: '.home);

// //como subir la imagen --->   func
// //tion postImagen($param){
//  //    $id_producto= $_POST['idForm'];
//    //  $name= uniqid();
//    //  $ruta =$_FILES['imagen']['tmp_name'];
//      //$type = $_FILES['imagen']['type'];
//      //$arrayType= explode("/",$type);
//    //  $destino ='images/'.$name.".".$arrayType[1];
//
//    //  move_uploaded_file($ruta,$destino);
//    //  $this->model->postImagen($name,$destino,$param[0]);
//
////*    }
//  $this->model->GuardarDenuncia($ubicacion,$descripcion,$estado,$imagen,$id_usuario);

  }
function mostrarFormulario(){ //lleva al usuario al formulario para crear una nueva denuncia
  $this->view->MostrarHome($this->Titulo);
}




}
?>
