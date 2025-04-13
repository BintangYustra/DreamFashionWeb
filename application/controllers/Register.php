<?php

class Register extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_Item');
    }

    public function index(){
        $data['judul'] = 'Login';
        $this -> load -> view('landing/registeruser', $data);
    }

    public function AddUser() {
        $nama_user = $this->input->post('nama_user');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $no_telp = $this->input->post('no_telp');
    
        $data2 = array(
            'nama_user' => $nama_user,
            'email' => $email,
            'password' => $password,
            'no_telp' => $no_telp,
        );
    
        $this->Model_Item->insert_user($data2);
    
        redirect('Login');
    }
    
}
