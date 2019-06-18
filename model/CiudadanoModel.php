<?php

class CiudadanoModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect()
  {
    return new PDO('mysql:host=localhost;'
    .'dbname=reportes_tandil;charset=utf8'
    , 'root', '');
  }

  function GetDenuncias($id_usuario){
    $sentencia = $this->db->prepare( "select * from denuncia where id_usuario=? ");
    $sentencia->execute(array($id_usuario));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetDenuncia($id_denuncia){
    $sentencia = $this->db->prepare( "select * from denuncia where id_denuncia=? limit 1");
    $sentencia->execute(array($id_denuncia));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }


  function GetUsuario($id_usuario){
    $sentencia = $this->db->prepare( "select * from usuario where id_usuario=? limit 1");
    $sentencia->execute(array($id_usuario));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }


  function GuardarDenuncia($longitud,$latitud,$descripcion,$estado,$imagen,$id_usuario)  {
    $imagen=$this->prepararImagen($imagen);
    $sentencia = $this->db->prepare("INSERT INTO denuncia(longitud,latitud,descripcion,estado,imagen,id_usuario) VALUES(?,?,?,?,?,?)");
    $sentencia->execute(array($longitud,$latitud,$descripcion,$estado,$imagen,$id_usuario));
  }

  function prepararImagen($imagen){ // la funcion le asigna una ruta relativa a la nueva imagen
    $ruta = 'imagenes/' . uniqid() .'.jpg';
    move_uploaded_file($imagen, $ruta);
    return $ruta;
  }

}


?>
