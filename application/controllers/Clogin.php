<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {
	
  	public function __construct(){
        parent::__construct(); 
        $this->load->model("Mlogin");
  	}

  public function ingresar(){

    $user = "";
    $pass = "";
    $sql = "";
    $consulta = "";

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "Select * from aprendiz where Identificacion = ".$user . " and Nombre = '". $pass ."'";
    try{
      $consulta = $this->Mlogin->ingresar($sql);

      if(empty($consulta)){
         echo false;
      }else{
        $datasessiones = array('id' => $user ,
                               'nombre' => $pass 
                         );
        $this->session->set_userdata($datasessiones);
        echo true;
      }

    }catch(Exception $ex){
      echo $ex;
    }
 }

  public function cpanel(){
    $data['nombre'] = $this->session->userdata('nombre') ;
    $this->load->view('Componentes/header');
    $this->load->view('cpanel', $data);
    $this->load->view('Componentes/footer');  
  
  }
  public function cerrar()
  {
    # code...
    try{
     $this->session->sess_destroy();
     echo true;
    }catch(Exception $e){
      echo false;
    }
    
  }
}