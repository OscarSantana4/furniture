<?php 
 class Inicio extends CI_Controller{
 
public function __construct()
{
	parent::__construct();
	$this->load->database();
}


      function index(){
         $query = $this->db->get("propiedades");
        $data['records'] = $query -> result();
          $this->load->view('index.php',$data); 

	  }

	 
	  function publicar_propiedad(){
	  	$this->load->view('publicar.php');
     
        $data = array('Titulo' => $this->input->post('Titulo'),
                      'Direccion' => $this->input->post('Direccion'),
                      'Precio' => $this->input->post('Precio'),
                      'Descripcion' => $this->input->post('Descripcion'),
                      'Tipo' => $this->input->post('Tipo'),
                      'Accion' => $this->input->post('Accion'),
                      'Latitud' => $this->input->post('Latitud'),
                      'Longitud' => $this->input->post('Longitud'),
                      'foto' => $this->input->post('foto'));  

        $this->load->model('PropiedadesModel');

        $this->PropiedadesModel->insertPropiedades($data);
  
	  }

	  function propiedad(){

	  	  $query = $this->db->get("propiedades");
        $data['records'] = $query -> result();
        /*$$this->load->model('AnimalModel');
        $data['records'] =  $this->AnimalModel->Get_records();*/
         $this->load->view('propiedades',$data);     
	  }


    }
?>