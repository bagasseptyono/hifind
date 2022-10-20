<?php

class User extends Controller {
    public function Registrasi(){
        $data['title']= 'Registrasi';
        $this->view('template/header',$data);
        $this->view('user/registrasi');
        $this->view('template/footer');
    }
	
	
	

    public function regis(){
        $time = strtotime($_POST['date']);
        $newformat = date('Y/m/d',$time);
        $_POST['date'] = $newformat;
        var_dump($_POST);
        
        

        if($_POST['password'] == $_POST['confirmpassword']) {	
			$row = $this->model('User_model')->cekUsername();
			if($row['username'] == $_POST['username']){
                Flasher::setMessage('Gagal','Username yang anda masukan sudah pernah digunakan!','danger');
				header('location: '. BASEURL . '/user/registrasi');
				exit;	
			} else {
				if( $this->model('User_model')->tambahUser($_POST) > 0 ) {
					Flasher::setMessage('Berhasil','ditambahkan','success');
					header('location: '. BASEURL . '/user/registrasi');
					exit;			
				} else {
					Flasher::setMessage('Gagal','ditambahkan','danger');
					header('location: '. BASEURL . '/user/registrasi');
					exit;	
				}
			}
		} else {
			Flasher::setMessage('Gagal','password tidak sama.','danger');
			header('location: '. BASEURL . '/user/registrasi');
			exit;	
		}
    }


	
	


}