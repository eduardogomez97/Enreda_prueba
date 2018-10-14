<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contratos extends CI_Controller {

    function __construct() {
        
        parent::__construct();
        $this->load->library('session');
        
        if(!$this->session->sesion){
            
            redirect(base_url()); 
        }
        $this->load->helper('form');
        $this->load->model('crearcontrato_model');
    }
	function index()
	{
        $data['contratos'] = $this->crearcontrato_model->obtenerContrato();
        $this->load->view('headers');
		$this->load->view('contratos/contratos',$data);
        
	}
    
    
      public function nuevo_contrato() 
    {
        $this->load->view('headers');
        $this->load->view('contratos/nuevo_contrato');
        
    }
    public function addContrato()
    {
        
        if($this->input->post()){
            
            
            $nombre = $this->db->escape($_POST["nombre"]);
            $fecha = $this->db->escape($_POST["fecha"]);

            if($this->crearcontrato_model->setContrato($nombre,$fecha)) {
                
                redirect('contratos'); 
                
            }
        }
        
    }
    
    public function modificarContrato($id = null)
    {
    
        if(!$id == null) {
            
            $id = $this->db->escape($id);
            $contrato = $this->crearcontrato_model->obtenerContratoPorId($id);
            $this->load->view('headers');
            $this->load->view('contratos/modificar_contrato', compact("contrato"));
        } else {
            
            redirect('contratos');
                     
        }
        
    }
    
    public function updateContrato()
    {
        if($this->input->post()){
            
            $id = $this->db->escape((int)$_POST["id"]);
            $nombre = $this->db->escape($_POST["nombre"]);
            $fecha = $this->db->escape($_POST["fecha"]);
            
            if ($this->crearcontrato_model->updateContrato($id,$nombre,$fecha))
            {
               redirect('contratos'); 
            }
        }
    }
    
    
    public function delete()
    {
    $id = $this->input->get('id');
        $this->crearcontrato_model->delete($id);
        $this->index();
    
    }
    
    

}