<?php
require_once('libs/Smarty.class.php');

class CiudadanoView
{

    private  $Smarty;

    function __construct()
    {
      $this->Smarty = new Smarty();
    }

    function PublicView(){

    }
  //  function mostrarFormulario($Titulo,$id_usuario){
    //  $this->Smarty->assign('id_usuario',$id_usuario);
  //    $this->Smarty->assign('Titulo',"$Titulo");
  //    $this->Smarty->display('templates/AgregarDenuncia.tpl');
  //  }
    function ViewBase()
    {
    }
    function MostrarHome($Titulo){
       $this->Smarty->assign('Titulo',"$Titulo");
        $this->Smarty->display('templates/AgregarDenuncia.tpl');
    }

}


?>
