<?php

class JefeController extends SecuredController
{
  function __construct()
  {
    parent::__construct();
  $this->model = new JefeModel();
  $this->view = new JefeView();
}
function HomeJefe($message = ''){
    $Mapa = $this->model->GetDenunciasActivas();
    $this->view->ViewBase($message, $this->Titulo, $Mapa);
}
  function CompletarDenuncia($param){
      $this->model->CompletarDenuncia($param[0]);
      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    }

}

?>
