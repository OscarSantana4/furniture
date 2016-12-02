<?php

    class LoginModel extends CI_Model{

    	public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
   
        public function get_login_info($email,$contrasena){

		 $this->db->where('email',$email);
		 $this->db->where('contrasena',$contrasena);
		 
		 $this->db->from('users');
		 $query = $this->db->get();
		 
		    if($query -> num_rows() == 1){
		     return $query->result();
		 }
		    
	}
	
	    public function get_user_info($email){
	    $this->db->select('nombre','apellido'); 
	    $this->db->where('email',$email);
		$this->db->from('users');
	    $this->db->limit(1);
	    $query = $this->db->get();
		
		    return $query->result();
	}

	    public function insert_user($data){
         if($this->db->insert('users',$data)){
         	return true;
         }
	    }   
	    
	 
       
  }





?>