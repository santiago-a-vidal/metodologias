<?php

class LoginController
{

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
