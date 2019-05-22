<?php
require_once('libs/Smarty.class.php');

class JefeView
{

  function __construct(){
    $this->smarty = new Smarty();

  }

  function ViewAdmin()
  {
  }


  function MostrarMapa($denuncias){
    $this->Smarty->assign('denuncias',$denuncias);
    $this->Smarty->display('templates/MapaJefe.tpl');
  }

}

 ?>
