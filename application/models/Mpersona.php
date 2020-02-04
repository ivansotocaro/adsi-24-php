<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpersona extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  	public function saveperson($dato)
  	{
  		echo $this->db->insert("aprendiz",$dato);	
  	}

  	public function buscarespecifico($id){
  		$query = $this->db->query("select * from aprendiz where identificacion = ".$id);
  		
  		if($query->num_rows()>0){
  			return $query->row();
  		}else{
  			return false;
  		}  		 		
  	}
    
    public function actualizar($id, $dato)
    {
      # code...
      $query = $this->db->where($id);
      echo $query = $this->db->update("aprendiz",$dato);
    }

    public function eliminar($id){
      $query = $this->db->where($id);
      echo $query = $this->db->delete("aprendiz");
    }

    public function consultar($sql)
    {
      # code...
      $query = $this->db->query($sql);
      if($query->num_rows()>0){
        return $query;
      }else{
        return false;
      }
    }
} 