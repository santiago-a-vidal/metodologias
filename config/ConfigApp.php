<?php

//define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
//define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"]. ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]));
//dirname($_SERVER["PHP_SELF"]);
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/home');
define('JEFE', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/jefe');
define('formulario', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/formulario');



class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      'home' => 'LoginController#Home',
      'jefe'=> 'JefeController#Home',
      'ciudadano'=> 'CiudadanoController#Home',
      'formulario'=>'CiudadanoController#mostrarFormulario',
      'AgregarDenuncia'=> 'CiudadanoController#InsertarDenuncia',
      'completarDenuncia'=>'JefeController#CompletarDenuncia',
    ];

    }
 ?>
