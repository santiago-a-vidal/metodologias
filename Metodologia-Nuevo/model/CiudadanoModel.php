<?php

class BasuraModel
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
    , 'root', 'root');
  }

  function GetDenuncias($id_usuario){
    $sentencia = $this->db->prepare( "select * from denuncia where id_usuario=? ");
    $sentencia->execute(array($id_usuario));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetDenuncia($id)
  {
  }

  function GuardarDenuncia($ubicacion,$descripcion,$estado,$imagen,$id_usuario)  {
    $sentencia = $this->db->prepare("INSERT INTO denuncia(ubicacion,descripcion,estado,imagen,id_usuario) VALUES(?,?,?,?,?)");
  $sentencia->execute(array($ubicacion,$descripcion,$estado,$imagen,$id_usuario));
  }



}


 ?>
