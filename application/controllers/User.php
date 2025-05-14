<?php
class Model_Order extends CI_Controller {
    public function insert_order($id_item, $nama_item) {
        $data = [
            'id_item' => $id_item,
            'nama_item' => $nama_item
        ];
        return $this->db->insert('tb_order', $data);
    }
}

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_Item');
        $this->load->model('Model_Order');
    }

    public function index() {
        $data['items'] = $this->Model_Item->get_all_items();
        $this->load->view('user/homeuser', $data);
    }

    public function beli() {
        $id_item = $this->input->post('id_item');
        $nama_item = $this->input->post('nama_item');

        $this->Model_Order->insert_order($id_item, $nama_item);

        redirect('user');
    }
}
