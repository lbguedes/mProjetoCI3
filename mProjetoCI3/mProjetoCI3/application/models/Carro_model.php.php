<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa_model
 *
 * @author jairb
 */
class Carro_model extends CI_Model {
    //put your code here
    
    function __construct() {
        parent::__construct();
    }
    
    function inserir($c){
        return $this->db->insert('carro',$c); //pessoa é o nome da tb no BD
    }
    
    function deletar($id){
        $this->db->where('idCarro',$id);
        return $this->db->delete('carro');
    }
    
    function editar($id){
        $this->db->where('idCarro',$id);
        $result = $this->db->get('carro');
        return $result->result();
    }
    
    function atualizar($c){
        $this->db->where('idCarro',$c['idCarro']);
        $this->db->set($c);
        return $this->db->update('carro');
    }

    /**
     * Este método retorna a lista de pessoas.
     */
    function listar(){
        $this->db->select('*');
        $this->db->from('carro');
        $this->db->order_by('marca','ASC');
        $this->db->order_by('modelo','ASC');
        $query = $this->db->get();
        return $query->result();
    }
}
