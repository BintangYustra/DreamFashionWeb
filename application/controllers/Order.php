<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // load DB
    }

    public function simpan() {
        $id_item = $this->input->post('id_item');
        $nama_item = $this->input->post('nama_item');

        $data = array(
            'id_item' => $id_item,
            'nama_item' => $nama_item
        );

        $this->db->insert('tb_order', $data);
        redirect('homeuser'); 
    }
}
