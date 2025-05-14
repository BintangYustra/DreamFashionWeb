<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_User extends CI_Controller {
    public function check_user($nama_user, $password) {
        $this->db->where('nama_user', $nama_user);
        $this->db->where('password', $password);
        return $this->db->get('tb_user')->row();
    }
}

class Login extends CI_Controller {
    public function index() {
        $this->load->view('landing/loginuser');
    }

    public function check_user($nama_user, $password) {
        $this->db->where('nama_user', $nama_user);
        $this->db->where('password', $password);
        return $this->db->get('tb_user')->row();
    }

    public function loginuser() {
        $nama_user = $this->input->post('nama_user');
        $password = $this->input->post('password');

        $user = $this->check_user($nama_user, $password);

        if ($user) {
            $data['nama_user'] = $user->nama_user;
            redirect('Homeuser');
        } else {
            echo "Login gagal. Nama atau password salah.";
        }
    }
}
