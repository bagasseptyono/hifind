<?php

class Barang extends Controller{
    public function index(){
        if (!isset($_SESSION["login"])) {
			header('location: '. BASEURL . '/login');
			exit;
		}
        $data['title']= 'Barang';
        $this->view('template/header',$data);
        $this->view('barang/index');
        $this->view('template/footer');
    }
    public function hilang(){
        $data['title']= 'Barang Hilang';
        $data['barang']= $this->model('Barang_model')->getDataUserFromBarang();
        $this->view('template/header', $data);
        $this->view('barang/hilang', $data);
        $this->view('template/footer');
    }
    public function temuanku(){
        if (!isset($_SESSION["login"])) {
			header('location: '. BASEURL . '/login');
			exit;
		}
        $data['title']= 'Temuanku';
        $data['barang'] = $this->model('Barang_model')->getDataBarangUser($_SESSION);
        $this->view('template/header',$data);
        $this->view('barang/temuanku',$data);
        $this->view('template/footer');
    }
    public function detail($id){
        if (!isset($_SESSION["login"])) {
			header('location: '. BASEURL . '/login');
			exit;
		}
        $data['title']= 'Detail Barang';
        $data['barang'] = $this->model('Barang_model')->getDataBarangById($id);
        $this->view('template/header',$data);
        $this->view('barang/detail',$data);
        $this->view('template/footer');
    }


    public function tambah(){
        $time = strtotime($_POST['date']);
        $newformat = date('Y/m/d',$time);
        $_POST['date'] = $newformat;
        if ($this->model('Barang_model')->tambahDataBarang($_POST,$_FILES)) {
            header('Location: ' . BASEURL . '/barang/hilang');
            exit;
        }
    }
    public function update(){
        $time = strtotime($_POST['date']);
        $newformat = date('Y/m/d',$time);
        $_POST['date'] = $newformat;
        if ($this->model('Barang_model')->updateBarang($_POST,$_FILES)) {
            header('Location: ' . BASEURL . '/barang/hilang');
            exit;
        }
    }

    public function edit($id){
        if (!isset($_SESSION["login"])) {
			header('location: '. BASEURL . '/login');
			exit;
		}
        
        $data['title']= 'Edit Barang Temuan';
        $data['barang'] = $this->model('Barang_model')->getDataBarangById($id);
        if ($_SESSION["userid"] != $data['barang']['user_id']) {
            header('location: '. BASEURL . '/barang/hilang');
            exit;
		}
        $time = strtotime($data['barang']['date']);
        $newformat = date('m/d/Y',$time);
        $data['barang']['date'] = $newformat;
        $this->view('template/header',$data);
        $this->view('barang/edit',$data);
        $this->view('template/footer');
    }

    public function hapus($id){
		if( $this->model('Barang_model')->hapusBarang($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. BASEURL . '/barang/temuanku');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. BASEURL . '/barang/temuanku');
			exit;	
		}
	}


}