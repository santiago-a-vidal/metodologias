<?php

//define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
//define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"]. ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]));
//dirname($_SERVER["PHP_SELF"]);
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/home');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');
define('MAPACIUDADANO', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/mapaciudadano');



class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      'home' => 'LoginController#Home', // CAMBIAR DESPUÉS
      'jefe'=> 'JefeController#Home',
      'ciudadano'=> 'CiudadanoController#Home',
      'formulario'=>'CiudadanoController#mostrarFormulario',
      // Cree una funcion para mostrar el mapa de cada usuario para hacerlo mas rapido, en un futuro se cambiara
      'mapaciudadano1'=> 'CiudadanoController#VerMapaCiudadano1',
      'mapaciudadano2'=> 'CiudadanoController#VerMapaCiudadano2',
      //Esto es para ver el mapa del jefe, pero no pude probar si anda
      'mapajefe'=> 'JefeController#VerMapaJefe',
      'AgregarDenuncia'=> 'CiudadanoController#insertarDenuncia'
    ];

    }
 ?>
