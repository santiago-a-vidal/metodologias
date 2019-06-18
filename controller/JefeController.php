<?php
//require_once  "SecuredController.php";
require_once "./model/JefeModel.php";
require_once "./view/JefeView.php";

class JefeController //extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
  //  parent::__construct();
  $this->model = new JefeModel();
  $this->Titulo = "Jefe de Cuadrilla";
  $this->view = new JefeView();
}
function Home(){
    $denuncias = $this->model->GetDenunciasActivas(); // llama  la funcion que carga todas las denuncias al mapa del jefe
    $this->view->MostrarMapaJefe($this->Titulo, $denuncias);
}
  function CompletarDenuncia($param){ // marcar las denuncias como realizadas ... estados : 0 = activa , 1=inactiva/realizda
      $this->model->CompletarDenuncia($param[0]);
      //$this->model->notificarCuidadano($param[0]);

    $this->Home();

    }




}

?>
