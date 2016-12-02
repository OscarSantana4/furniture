<?php 

class Mapa extends CI_Controller{
    
    function index(){
    	$this->load->helper('url');
    	$this->load->view('Map.php');
    }
}
 ?>