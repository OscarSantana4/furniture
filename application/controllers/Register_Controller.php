<?php 
class Register_Controller extends CI_Controller{

public function __construct()
{
	parent::__construct();
	$this->load->database();
}

public function index(){
   
    $this->load->View('sign_up.php');
    
  }

public function add_user(){
	 $this->load->model('LoginModel');
     
     $data = array('nombre' => $this->input->post('nombre'),
                   'apellido' => $this->input->post('apellido'),
                   'telefono' => $this->input->post('telefono'),
                   'celular' => $this->input->post('celular'),
                   'cedula' => $this->input->post('cedula'),
                   'fax' => $this->input->post('fax'),
                   'email' => $this->input->post('email'),
                   'contrasena' => $this->input->post('contrasena'),
                   'mas_informacion' => $this->input->post('mas_informacion'));

    $this->LoginModel->insert_user($data);
    $this->load->view('sign_in.php');
}

}
 ?>