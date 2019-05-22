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


  function GetDenuncias($id_usuario){
    $sentencia = $this->db->prepare( "select * from usuario where id_usuario=? ");
    $sentencia->execute(array($id_usuario));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


  function GuardarDenuncia($descripcion,$estado,$id_usuario,$latitud,$longitud)  {
    $sentencia = $this->db->prepare("INSERT INTO denuncia(descripcion,estado,id_usuario,latitud,longitud) VALUES(?,?,?,?,?)");
  $sentencia->execute(array($descripcion,$estado,$id_usuario,$latitud,$longitud));

  }



}


 ?>
