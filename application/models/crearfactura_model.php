<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crearfactura_model extends CI_Model {
    function __construct(){
        
        parent::__construct();
        $this->load->database();
    }
       
    function obtenerFactura(){
        
        $query = $this->db->get('facturas');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    public function setFactura($nombre,$fecha,$adjunto,$id_contrato,$precio,$iva,$total)
    {
        
        return $this->db->query("INSERT INTO facturas (nombre,fecha,adjunto,id_contrato,precio,iva,total) values ({$nombre},{$fecha},{$adjunto},{$id_contrato},{$precio},{$iva},{$total})");
    }
    
    function obtenerFacturaPorId($id)
    {
        return $this->db->query("SELECT id,nombre,fecha,adjunto,id_contrato,precio,iva,total FROM facturas WHERE id={$id}")->row();
    }
    
    function updateFactura($id,$nombre,$fecha,$adjunto,$id_contrato,$precio,$iva,$total)
    {
        return $this->db->query("UPDATE facturas SET nombre = {$nombre},fecha = {$fecha},adjunto = {$adjunto},id_contrato = {$id_contrato},precio = {$precio},iva = {$iva},total = {$total} WHERE id={$id}");
    }
    
    public function delete($id)
    {
        $this->db->delete('facturas', array('id' => $id));
    }
    
}
?>