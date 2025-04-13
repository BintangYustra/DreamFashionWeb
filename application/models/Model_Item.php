<?php

class Model_Item extends CI_Controller{

    public function __construct(){
        parent::__construct();
        // $this->load->library('cart'); 
    }

    public function insert_user($data) {
        return $this->db->insert('tb_user', $data);
    }

    public function getAllUser(){
        return $query = $this->db->get('tb_user') -> result_array();
    }

    public function tampil_item() {
        return $this->db->get('tb_item')->result();
    }
    
    public function AddProduct($data2){
        $this -> db -> insert('tb_item', $data2);
    }

    public function UpdateProduct($data, $id_item) {
        $this->db->where('id_item', $id_item);
        $this->db->update('tb_item', $data);
    }
}