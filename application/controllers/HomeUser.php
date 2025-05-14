<?php

class HomeUser extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_Item'); 
        // $this->load->library('cart'); 
    }

    public function index(){
        $data['judul'] = 'Welcome User';
        $data1['items'] = $this->Model_Item->tampil_item();
        $this -> load -> view('templates/user/headeruser', $data);
        $this -> load -> view('templates/user/sidepaneluser');
        $this -> load -> view('user/homeuser', $data1);
        // $this -> load -> view('templates/user/footeruser');
    }
    
}
