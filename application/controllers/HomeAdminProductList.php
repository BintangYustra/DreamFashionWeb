<?php

class HomeAdminProductList extends CI_Controller{
    public function index(){
        $data['judul'] = 'Welcome Admin';
        $data1['items'] = $this->Model_Item->tampil_item();
        $this -> load -> view('templates/admin/headeradmin', $data);
        $this -> load -> view('templates/admin/sidepaneladmin');
        $this -> load -> view('admin/homeadminproductlist', $data1);
        // $this -> load -> view('templates/admin/footeradmin');
    }
}