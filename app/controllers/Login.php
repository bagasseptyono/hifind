<?php

class Login extends Controller{
    public function index(){
        if (isset($_SESSION["login"])) {
			header('location: '. BASEURL . '/home');
			exit;
		}
        $data['title']= 'Login';
        $this->view('template/header',$data);
        $this->view('login/index');
        $this->view('template/footer');
    }

	public function log(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$row = $this->model('User_model')->cekUsername();
		$rowCount = $this->model('User_model')->countUsername();
		//var_dump($row);var_dump($rowCount);die;
		if ($row) {
			if (password_verify($password,$row["password"])) {
				$_SESSION["login"]= true;
				$_SESSION["userid"]= $row["userid"];
				header('location: '. BASEURL . '/barang');
				exit;
			}
		}
		Flasher::setMessage('Gagal','Username/Password Salah','danger');
		header('location: '. BASEURL . '/login/index');
		exit;
	}
    
}