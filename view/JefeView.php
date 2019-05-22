<?php
require_once('libs/Smarty.class.php');

class JefeView
{
  private  $Smarty;

  function __construct(){
    $this->smarty = new Smarty();

  }

  function ViewAdmin()
  {
  }


  function MostrarMapaJefe($denuncias){
    $this->Smarty->assign('denuncias',$denuncias);
    $this->Smarty->display('templates/MapaJefe.tpl');
  }

}

 ?>
