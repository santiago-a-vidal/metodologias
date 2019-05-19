<?php

class JefeModel
{
 private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }
  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=repotes_tandil;charset=utf8'
    , 'root', 'root');
  }

  function GetDenunciasActivas(){
    $sentencia = $this->db->prepare( "select * from denuncia where estado=0");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetDenuncia($id)
  {
  }

  function BorrarDenuncia($id_denuncia){

  }
  function CompletarDenuncia($id_denuncia){
   $sentencia = $this->db->prepare( "update denuncia set estado=1 where id=?");
   $sentencia->execute(array($id_denuncia));
 }

}


  ?>
