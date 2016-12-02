<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Logincontroller extends CI_Controller{


	function __construct(){
		parent::__construct();
		$this->load->database();
    $this->load->library('form_validation');
     $this->load->helper('form');
		
	}
public function index(){
	 $this->load->helper('form');
	      //   $this->config->set_item('language', 'spanish');      //   Setear dinámicamente el idioma que deseamos que ejecute nuestra aplicación
       if(!isset($_POST['email'])){   //   Si no recibimos ningún valor proveniente del formulario, significa que el usuario recién ingresa.   
          $this->load->view('sign_in.php');      //   Por lo tanto le presentamos la pantalla del formulario de ingreso.
       }
    else{                        //   Si el usuario ya pasó por la pantalla inicial y presionó el botón "Ingresar"
          $this->form_validation->set_rules('email','email','required');      //   Configuramos las validaciones ayudandonos con la librería form_validation del Framework Codeigniter
          $this->form_validation->set_rules('contrasena','contrasena','required');
          

          if(($this->form_validation->run()==FALSE)){            //   Verificamos si el usuario superó la validación
             $this->load->view('sign_in.php');                     //   En caso que no, volvemos a presentar la pantalla de login
          }
          else{                                       //   Si ambos campos fueron correctamente rellanados por el usuario,
             $this->load->model('LoginModel');
             $ExisteUsuarioyPassoword = $this->LoginModel->get_login_info($_POST['email'],$_POST['contrasena']);  //   comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
             if($ExisteUsuarioyPassoword){   // La variable $ExisteUsuarioyPassoword recibe valor TRUE si el usuario existe y FALSE en caso que no. Este valor lo determina el modelo.
                  
             //$data['record'] = array('email' => $this->input->post('email'));
				     $this->load->view('Index.php');       
			 }
             else{   //   Si no logró validar
                $data['error']="Usuario o password incorrecta, por favor vuelva a intentar";
                $this->load->view('sign_in.php',$data);   //   Lo regresamos a la pantalla de login y pasamos como parámetro el mensaje de error a presentar en pantalla
             }
             
          }   
       }




   }
}

 ?>

