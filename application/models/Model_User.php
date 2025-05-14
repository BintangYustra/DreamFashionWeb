<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_User extends CI_Model {
    public function check_user($nama_user, $password) {
        $this->db->where('nama_user', $nama_user);
        $this->db->where('password', $password);
        return $this->db->get('tb_user')->row();
    }
}
