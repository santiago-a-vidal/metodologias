<?php

class LoginController
{

  function __construct()
  {

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
