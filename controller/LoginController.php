<?php

require_once "./view/LoginView.php";


class LoginController
{
  private $view;


  function __construct()
  {
  $this->view = new LoginView();

  }

  function login(){
    $this->view->mostrarLogin();
  }

  function logout(){
    session_start();
    session_destroy();
    header('Location: '.login);
  }

}
?>
