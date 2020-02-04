<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

    /*
    En esta accion vamos a buscar datos en la tabla
    el sql puede cambiar según lo que se envie desde
    el controlador 
    */
  	public function ingresar($sql){
      $query = $this->db->query($sql);
      
      if($query->num_rows()>0){
        return true;
      }else{
        return false;
      }
          
    }

 }