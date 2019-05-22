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


  function GetUsuario($id_usuario){
    $sentencia = $this->db->prepare( "select id_usuario from usuario where id_usuario=? limit 1");
    $sentencia->execute(array($id_usuario));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }


  function GuardarDenuncia($descripcion,$longitud,$latitud,$estado,$id_usuario)  {
    $sentencia = $this->db->prepare("INSERT INTO denuncia(descripcion,longitud,latitud,estado,id_usuario) VALUES(?,?,?,?,?)");
  $sentencia->execute(array($descripcion,$longitud,$latitud,$estado,$id_usuario,));

  }



}


 ?>
