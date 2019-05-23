<?php
require_once('libs/Smarty.class.php');

class JefeView
{
  private  $Smarty;

  function __construct(){
    $this->Smarty = new Smarty();

  }

  function ViewAdmin()
  {
  }


  function MostrarMapaJefe($Titulo, $denuncias){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('denuncias',$denuncias);
    $this->Smarty->display('templates/HomeJefeCuadrilla.tpl');
  }

}

 ?>
