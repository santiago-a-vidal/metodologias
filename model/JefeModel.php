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
    .'dbname=reportes_tandil;charset=utf8'
    , 'root', '');
  }

  function GetDenunciasActivas(){
    $sentencia = $this->db->prepare( "select * from denuncia where estado=0 ");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function CompletarDenuncia($id_denuncia){
   $sentencia = $this->db->prepare( "update denuncia set estado=1 where id_denuncia=?");
   $sentencia->execute(array($id_denuncia));
 }

}


  ?>
