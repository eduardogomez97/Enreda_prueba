<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facturas extends CI_Controller {

    function __construct() {
        
        parent::__construct();
        $this->load->library('session');
        
        if(!$this->session->sesion){
            
            redirect(base_url()); 
        }
        

        $this->load->helper('form');
        $this->load->model('crearfactura_model');
    }
    
	function index()
	{
        $data['facturas'] = $this->crearfactura_model->obtenerFactura();
        $this->load->view('headers');
		$this->load->view('facturas/facturas',$data);
        

    }
    
    public function nueva_factura() 
    {
        $this->load->view('headers');
        $this->load->view('facturas/nueva_factura');
        
    }
    public function addFactura()
    {
        
        if($this->input->post()){
            
            
            $nombre = $this->db->escape($_POST["nombre"]);
            $fecha = $this->db->escape($_POST["fecha"]);
            $adjunto = $this->db->escape($_POST["adjunto"]);
            $id_contrato = $this->db->escape($_POST["id_contrato"]);
            $precio = intval($_POST["precio"]);
            $iva = ($precio*21)/100;
            $total = $precio+$iva;

            if($this->crearfactura_model->setFactura($nombre,$fecha,$adjunto,$id_contrato,$precio,$iva,$total)) {
                
                redirect('facturas'); 
                
            }
        }
        
    }
    
    public function modificarFactura($id = null)
    {
    
        if(!$id == null) {
            
            $id = $this->db->escape($id);
            $factura = $this->crearfactura_model->obtenerFacturaPorId($id);
            $this->load->view('headers');
            $this->load->view('facturas/modificar_factura', compact("factura"));
        } else {
            
            redirect('facturas');
                     
        }
        
    }
    
    public function updateFactura()
    {
        if($this->input->post()){
            
            $id = $this->db->escape((int)$_POST["id"]);
            $nombre = $this->db->escape($_POST["nombre"]);
            $fecha = $this->db->escape($_POST["fecha"]);
            $adjunto = $this->db->escape($_POST["adjunto"]);
            $id_contrato = $this->db->escape($_POST["id_contrato"]);
            $precio = $this->db->escape($_POST["precio"]);
            $iva = $this->db->escape($_POST["iva"]);
            $total = $this->db->escape($_POST["total"]);
            
            if ($this->crearfactura_model->updateFactura($id,$nombre,$fecha,$adjunto,$id_contrato,$precio,$iva,$total))
            {
               redirect('facturas'); 
            }
        }
    }
                
    
    public function delete()
    {
    $id = $this->input->get('id');
        $this->crearfactura_model->delete($id);
        $this->index();
    
    }

}
