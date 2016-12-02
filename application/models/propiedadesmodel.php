<?php 

class PropiedadesModel extends CI_Model{

public function __construct()
{
	parent::__construct();
	$this->load->database();
}


function insertPropiedades($data){
   if($this->db->insert('propiedades',$data)){
      return true;
   }
}


}
 ?>