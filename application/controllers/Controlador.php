<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {
	
  	public function __construct(){
        parent::__construct(); 
  		

  	}
  	
	 public function index()
	{
		$dato['nombre'] = "William";
		$dato['nota1'] = 4.0;
		$dato['nota2'] = 5.0;
		$dato['nota3'] = 4.5;
		$dato['fecha_nacimiento'] = "23/12/1989";
		
		$this->load->view('Componentes/header');
		$this->load->view('adsi24',$dato);
		$this->load->view('Componentes/footer');
	}

	public function iniciar(){
		$this->load->view('Componentes/header');
		$this->load->view('login');
		$this->load->view('Componentes/footer');
	}

	public function pagina2()
	{
		$this->load->view('Componentes/header');
		$this->load->view('misojosestanbuenos');
		$this->load->view('Componentes/footer');
	
	}

	public function operaciones()
	{
		$num1 = 0;
		$num2 = 0;
		$resultado = 0;

		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];

		$resultado = $num1 + $num2;

		echo "su resultado es: ". $resultado;
	}

	

}