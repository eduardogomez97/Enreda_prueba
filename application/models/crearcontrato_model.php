<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crearcontrato_model extends CI_Model {
    function __construct(){
        
        parent::__construct();
        $this->load->database();
    }
       
    function obtenerContrato(){
        
        $query = $this->db->get('contratos');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    public function setContrato($nombre,$fecha)
    {
        
        return $this->db->query("INSERT INTO contratos (nombre, fecha) values ({$nombre},{$fecha})");
    }
    
    function obtenerContratoPorId($id)
    {
        return $this->db->query("SELECT id,nombre,fecha FROM contratos WHERE id={$id}")->row();
    }
    
    function updateContrato($id,$nombre,$fecha)
    {
        return $this->db->query("UPDATE contratos SET nombre = {$nombre},fecha = {$fecha} WHERE id={$id}");
    }
    
    public function delete($id)
    {
        $this->db->delete('contratos', array('id' => $id));
    }
    
}
?>