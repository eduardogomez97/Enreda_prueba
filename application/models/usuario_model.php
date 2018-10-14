<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario_model extends CI_Model {
    function __construct(){
        
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }
       
    public function login($user,$password){
        
        $sql = "SELECT * from usuarios where user='".$user."' and password='".$password."'";
        $usuario = $this->db->query($sql)->result();
        
        if(count($usuario)== 1) {
            
            $this->session->sesion=TRUE;
            redirect('facturas'); 
        } else {
            return false;
        }

    }
    
}
?>