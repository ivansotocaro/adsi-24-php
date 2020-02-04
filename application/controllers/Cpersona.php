<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpersona extends CI_Controller {
	
  	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mpersona');
  	}

  	public function saveperson()
  	{
  		# code...

  		$dato = array(
  					"Identificacion" => $_POST['identificacion'],
  					"Nombre" => $_POST['nombre'],
  					"Apellidos" => $_POST['apellidos'],
  					"Celular" => $_POST['celular']
  				);

  		echo $this->Mpersona->saveperson($dato);
  	}

    public  function buscarespecifico()
    {
      # code...
      
        $id = $_POST['identificacion'];
         $respuesta = $this->Mpersona->buscarespecifico($id);
        echo json_encode($respuesta);
    }

    public function actualizar()
    {
      # code...
      $id["Identificacion"] = $_POST['identificacion'];

      if(isset($_POST['celular'])){
        $dato = array('Nombre' => $_POST['nombre'], 'Apellidos' => $_POST['apellidos'],
      'Celular' => $_POST['celular']
      );
      }else{
        $dato = array('Nombre' => $_POST['nombre'], 'Apellidos' => $_POST['apellidos']
      );
      }

      

      echo $this->Mpersona->actualizar($id,$dato);
    }

    public function eliminar()
    {
      # code...
      $id["Identificacion"] = $_POST['identificacion'];

      echo $this->Mpersona->eliminar($id);
    }

    public function taprendiz()
    {
      # code...
      $dato['aprendiz'] = $this->Mpersona->consultar("Select * from aprendiz");
      $this->load->view('Tablas/taprendiz',$dato);
    }


}
  	