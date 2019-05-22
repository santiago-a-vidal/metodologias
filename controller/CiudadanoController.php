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
    $this->Titulo = "Ciudadano";
    $this->view = new CiudadanoView();
  }

  function Home(){
    $usuario = $this->model->GetUsuario(1);
    $denuncias = $this->model->GetDenuncias(1);
    $this->view->MostrarHome($this->Titulo);
    $this->view->MostrarMapa($usuario[0],$denuncias);
  }



//Aca estan las funciones para ver cada mapa de cada usuario, esta hardcodeadisimo.
function VerMapaCiudadano1(){
  //Traigo al usuario con id 1
  $usuario = $this->model->GetUsuario(1);
  //Traigo las denuncias del usuario con id 1
  $denuncias = $this->model->GetDenuncias(1);
  $this->view->MostrarMapa($usuario[0],$denuncias);
}


  function insertarDenuncia(){ // Esta funcion toma los datos del formulario y se las envia al model

    echo console.log($_POST["longitudForm"]);
    $longitud = $_POST["longitudForm"];
    echo $_POST["longitudForm"];
//Se trae el usuario de un input escondido en el form para saber que usuario asignarle a cada denuncia
    $id_usuario = $_POST["id_usuario_form"];

    $latitud = $_POST["latitudForm"];

    $descripcion = $_POST["descripcionForm"];
    $estado = 0;
    //$imagen = $_POST["imagenForm"];

 $descripcion = $_POST["descripcionForm"];
 $estado = 0;
 //todo esto de insertar la imagen lo saque para poder porbar que esto ande, en un futuro se implementara

//$imagen = $_POST["imagenForm"];

$denuncia = $this->model ->GuardarDenuncia($descripcion,$estado,$id_usuario,$longitud,$latitud);

  header(MAPACIUDADANO);

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
  $this->view->MostrarFormulario($this->Titulo);
}




}
?>
