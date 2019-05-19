<?php

require_once ('./libs/Smarty.class.php');

class LoginView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function mostrarLogin($message = '')
  {
    $this->Smarty->assign('Titulo',"Inicie sesión");
    $this->Smarty->assign('Message',$message);
    $this->Smarty->display('view/templates/Login.tpl');
  }

}

 ?>
