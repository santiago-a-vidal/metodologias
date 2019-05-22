<?php
require_once('libs/Smarty.class.php');

class CiudadanoView
{

    private  $Smarty;

    function __construct()
    {
      $this->Smarty = new Smarty();
    }



  //  function MostrarHome($Titulo){
  //     $this->Smarty->assign('Titulo',"$Titulo");
  //    $this->Smarty->display('templates/HomePublico.tpl');

    function MostrarFormulario($Titulo){
      $this->Smarty->assign('Titulo',"$Titulo");
      $this->Smarty->display('templates/formulario.tpl');
    }
    function MostrarMapa($Titulo, $usuario,$denuncias){
      $this->Smarty->assign('Titulo',"$Titulo");
      $this->Smarty->assign('usuario',$usuario);
     $this->Smarty->assign('denuncias',$denuncias);
     $this->Smarty->display('templates/HomePublico.tpl');


    }




}


?>
