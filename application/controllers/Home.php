<?php

class Home extends CI_Controller{
    public function index(){
        $data['judul'] = 'Home';
        $this -> load -> view('templates/landing/headerlanding', $data);
        $this -> load -> view('landing/home');
        $this -> load -> view('templates/landing/footerlanding');
    }
}