<?php

class HomeAdminUserList extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this -> load -> model ('Model_Item');
    }
    public function index(){
        $data['judul'] = 'Welcome Admin';
        $data1['items'] = $this->Model_Item->tampil_item();
        $this -> load -> model ('Model_Item');
        $data['dreamfashiondb'] = $this->Model_Item-> getAllUser();

        $this -> load -> view('templates/admin/headeradmin', $data);
        $this -> load -> view('templates/admin/sidepaneladmin');
        $this -> load -> view('admin/homeadminlistuser', $data1);
        // $this -> load -> view('templates/admin/footeradmin');
    }
}