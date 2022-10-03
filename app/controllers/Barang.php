<?php

class Barang extends Controller{
    public function index(){
        $data['title']= 'Barang';
        $this->view('template/header',$data);
        $this->view('barang/index');
        $this->view('template/footer');
    }
    public function hilang(){
        $data['title']= 'Barang Hilang';
        $data['barang'] = $this->model('Barang_model')->getDataBarang();
        $this->view('template/header', $data);
        $this->view('barang/hilang', $data);
        $this->view('template/footer');
    }
    public function tambah(){
        $time = strtotime($_POST['date']);
        $newformat = date('Y/m/d',$time);
        $_POST['date'] = $newformat;
        var_dump($_POST);
        var_dump($_FILES);
        /*if ($this->model('Barang_model')->tambahDataBarang($_POST)) {
            header('Location: ' . BASEURL . '/barang');
            exit;
        }*/
    }


}