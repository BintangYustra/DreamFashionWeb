<?php

class Contact extends CI_Controller{
    public function index(){
        $data['judul'] = 'Contact';
        $this -> load -> view('templates/landing/headerlanding', $data);
        $this -> load -> view('landing/contact');
        $this -> load -> view('templates/landing/footerlanding');
    }
}