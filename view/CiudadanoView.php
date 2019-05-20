<?php
require_once('libs/Smarty.class.php');

class CiudadanoView
{

    private  $smarty;

    function __construct()
    {
      $this->smarty = new Smarty();
    }

    function PublicView(){

    }
    function mostrarFormulario($Titulo,$id_usuario){
      $this->Smarty->assign('id_usuario',$id_usuario);
      $this->Smarty->assign('Titulo',"$Titulo");
      $this->Smarty->display('view/templates/AgregarDenuncia.tpl');
    }
    function ViewBase()
    {
    }

}


?>
