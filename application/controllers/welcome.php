<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function __construct() 
    { 
        parent::__construct();
        $this->load->library('session');
        $this->load->model('usuario_model');
        
    }

	public function index()
	{
        
        $this->load->view('welcome_message');
        if($this->input->post()){
			$usuario = $_POST["user"];
			$password = $_POST["password"];
			if ($this->usuario_model->login($usuario, $password)) {
				redirect('facturas'); 
			}else{
                
                print_r($password);
            }
		}

    
    }
    
}