<?php
//require_once  "SecuredController.php";
 
class JefeController //extends SecuredController
{
  function __construct()
  {
  //  parent::__construct();
  $this->model = new JefeModel();
  $this->view = new JefeView();
}
function HomeJefe($message = ''){
    $Mapa = $this->model->GetDenunciasActivas(); // llama  la funcion que carga todas las denuncias al mapa del jefe
    $this->view->ViewBase($message, $this->Titulo, $Mapa);
}
  function CompletarDenuncia($param){ // marcar las denuncias como realizadas ... estados : 0 = activa , 1=inactiva/realizda
      $this->model->CompletarDenuncia($param[0]);
      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    }

}

?>
