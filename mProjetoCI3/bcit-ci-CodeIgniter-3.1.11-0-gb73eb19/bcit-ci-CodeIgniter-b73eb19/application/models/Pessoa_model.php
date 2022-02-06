<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Pessoa_model
 *
 * @author laura
 */
class Pessoa_model extends CI_Model {
   
   function __construct(){
       parent:: __construct();
} 
    
    function listar(){
        $this->db->select('*');
        $this->db->form('pessoa');
        $this->db->order_by('nome','ASC');
        $query = $this->db->get();
        return $query->result();
    }
}
