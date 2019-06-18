<?php
//require_once  "SecuredController.php";
require_once "./model/JefeModel.php";
require_once "./model/CiudadanoModel.php";
require_once "./view/JefeView.php";

class JefeController //extends SecuredController
{
  private $view;
  private $model;
  private $modelc;
  private $Titulo;

  function __construct()
  {
  //  parent::__construct();
    $this->modelc = new CiudadanoModel();
  $this->model = new JefeModel();
  $this->Titulo = "Jefe de Cuadrilla";
  $this->view = new JefeView();
}
function Home(){
    $denuncias = $this->model->GetDenunciasActivas(); // llama  la funcion que carga todas las denuncias al mapa del jefe
    $this->view->MostrarMapaJefe($this->Titulo, $denuncias);
}
  function CompletarDenuncia($param){ // marcar las denuncias como realizadas ... estados : 0 = activa , 1=inactiva/realizda
    $usuario = $this->modelc->getUsuario(1);
    $denuncia = $this->modelc->getDenuncia($param[0]);
    $this->notificarCiudadano($denuncia, $usuario);
      $this->model->CompletarDenuncia($param[0]);

      //$this->model->notificarCuidadano($param[0]);

    $this->Home();

    }

    private function notificarCiudadano($denuncia,$usuario){
                //mail que simula ser el de la secretaria
                $to = 'brendulu@gmail.com';
                //envia el mail
                $from = 'venere.maia@gmail.com';
                $fromName = 'Secretaria de medio ambiente Tandil';
                $numeroDenuncia = $denuncia['id_denuncia'];
    			$descripcion= $denuncia['descripcion'];
                $nombrecompleto = $usuario['nombre'];
                $fechaHoy ="19 de Junio de 2019";
                $ubicacion = $denuncia['latitud'].', '.$denuncia['longitud'];
                //asunto
                $subject = 'Notificacion de la Denuncia  N°'.$numeroDenuncia;



                //Le damos una estructura al mail
                $htmlContent = "<div>
                <h3>Señor cuiudadano por medio de este correo electronico se le notifica
    			que el dia $fechaHoy se ha realizado la recoleccion de los residuos que este usted
    			$nombrecompleto ha reportado en la ubicacion : $ubicacion  con la siguente descripcion: $descripcion donde el numero de denuncia asignado fue $numeroDenuncia </h3>


                </div>";

                $headers = "From: $fromName"." <".$from.">";
                $semi_rand = md5(time());
                $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
                $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
                $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";
                //adjunta el video

                $message .= "--{$mime_boundary}--";
                $returnpath = "-f" . $from;
                //envia el mail
                mail($to, $subject, $message, $headers, $returnpath);
            }


}

?>
