<?php

class About extends CI_Controller{
    public function index(){
        $data['judul'] = 'Home';
        $this -> load -> view('templates/landing/headerlanding', $data);
        $this -> load -> view('landing/about');
        $this -> load -> view('templates/landing/footerlanding');
    }
}