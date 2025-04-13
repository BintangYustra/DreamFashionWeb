<?php

class OurProduct extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_Item');
        $this->load->library('upload');
    }

    public function index() {
        $data['judul'] = 'Product';
        $data1['items'] = $this->Model_Item->tampil_item();
        $this -> load -> view('templates/landing/headerlanding', $data);
        $this->load->view('landing/ourproduct', $data1);
        $this -> load -> view('templates/landing/footerlanding');
    }

    public function AddProduct() {
        $nama_item = $this -> input -> post('nama_item');
        $keterangan = $this -> input -> post('keterangan');
        $kategori = $this -> input -> post('kategori');
        $harga = $this -> input -> post('harga');
        $stok = $this -> input -> post('stok');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar == ''){}else{
            $config ['upload_path'] = 'images';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';
            $this -> load -> library('upload', $config);


        $data2 = array(
            'nama_item' => $nama_item,
            'keterangan' => $keterangan,
            'kategori' => $keterangan,
            'harga' => $harga,
            'stok' => $stok,
            'gambar' => $gambar
        );
        $this -> Model_Item -> AddProduct($data2, 'tb_item');
        redirect('HomeAdmin');

    }
    }

    public function UpdateProduct() {
        $id_item = $this->input->post('id_item');
        $nama_item = $this->input->post('nama_item');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        
        $gambar = $_FILES['gambar']['name'];
        
        if ($gambar) {
            $config['upload_path'] = './assets/images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data('file_name');
            } else {
                echo "Gambar gagal diupload!";
                return;
            }
        } else {
            $gambar = $this->input->post('gambar_lama');
        }

        $data = array(
            'nama_item' => $nama_item,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'gambar' => $gambar
        );

        $this->Model_Item->UpdateProduct($data, $id_item);
        redirect('Login');
}

}