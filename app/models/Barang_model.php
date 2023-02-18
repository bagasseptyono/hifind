<?php

class Barang_model{

    private $table = 'barang';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getDataBarang(){
        $this->db->query('SELECT * from ' . $this->table);
        return $this->db->resultSet();
    }
    public function getDataBarangUser($data){
        $this->db->query('SELECT * from ' . $this->table. ' where user_id = '. $data['userid']);
        return $this->db->resultSet();
    }
    public function getDataBarangById($data){
        $this->db->query('SELECT * from ' . $this->table. ' where id_barang = '. $data);
        return $this->db->single();
    }
    public function getDataUserFromBarang(){
        $this->db->query('SELECT * from ' . $this->table. ' INNER JOIN users ON barang.user_id=users.userid ');
        return $this->db->resultSet();
    }
    public function inputGambar($file){
        $namaGmbr = $file["gambar"]["name"];
        $ukuranGmbr = $file["gambar"]["size"];
        $errorGmbr = $file["gambar"]["error"];
        $tmpGmbr = $file["gambar"]["tmp_name"];

        

        $ekstensiGmbrValid = ['jpg','jpeg','png','heic'];
        $ekstensiGmbr = explode('.',$namaGmbr);
        $ekstensiGmbr = strtolower(end($ekstensiGmbr));

        
        
        if ($errorGmbr === 0) {
            if (!in_array($ekstensiGmbr,$ekstensiGmbrValid)) {
                Flasher::setMessage('Gagal','Bukan Gambar PNG / JPG / JPEG / HEIC','danger');
		        header('location: '. BASEURL . '/barang');
		        exit;
            } 
            $namaGmbrBaru = uniqid();
            $namaGmbrBaru .= '.';
            $namaGmbrBaru .= $ekstensiGmbr;
        

            move_uploaded_file($tmpGmbr , 'img/'. $namaGmbrBaru);
        }

        
        if ($errorGmbr === 4){
            $namaGmbrBaru = "nopicture.png";
        }
        return $namaGmbrBaru;
    }


    public function tambahDataBarang($data,$file){
        $tanggal = 'date';
        $namaGmbrBaru = $this->inputGambar($file);
        $userid = $_SESSION["userid"];

        $query = "INSERT INTO barang (judul_barang , nama_barang , tempat, kategori , date , deskripsi , kontak, gambar , user_id)
            VALUES 
            ( :judul_barang , :nama_barang , :tempat ,:kategori, :date , :deskripsi , :kontak , :gambar, :userid)";
        $this->db->query($query);
        $this->db->bind('judul_barang', $data['judul_barang']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('tempat', $data['tempat']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('date', $data['date']);
        $this->db->bind('gambar', $namaGmbrBaru);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('kontak', $data['kontak']);
        $this->db->bind('userid', $userid);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateBarang($data,$file){
        $errorGmbr = $file["gambar"]["error"];
        if ($errorGmbr === 4) {
            
            $namaGmbrBaru = $data["gambarLama"];
        }else {
            $hapus = "img/".$data["gambarLama"];
            unlink($hapus);
            $namaGmbrBaru = $this->inputGambar($file);
        }
        if ($data["date"]=="1970/01/01") {
            $time = strtotime($data["tanggalLama"]);
            $newformat = date('Y/m/d',$time);
            $data['date'] = $newformat;
            
        }
        
        $query = "UPDATE barang SET judul_barang =:judul_barang, nama_barang=:nama_barang , tempat=:tempat ,kategori=:kategori, date=:date , deskripsi=:deskripsi , kontak=:kontak, gambar=:gambar WHERE id_barang=:id_barang";

        $this->db->query($query);
        $this->db->bind('judul_barang', $data['judul_barang']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('tempat', $data['tempat']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('date', $data['date']);
        $this->db->bind('gambar', $namaGmbrBaru);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('kontak', $data['kontak']);
        $this->db->bind('id_barang',$data['id_barang'] );

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusBarang($id){
        $query = "DELETE FROM barang where id_barang=:id";
        $data = $this->getDataBarangById($id);
        $hapus = "img/". $data["gambar"];
        unlink($hapus);
        $this->db->query($query);
        $this->db->bind('id',$id );
        $this->db->execute();
        

        return $this->db->rowCount();

    }



    public function cari()
	{
		$data=$_POST['keyword'];
		$this->db->query('SELECT * FROM  '. $this->table . ' WHERE 
        judul_barang LIKE :keyword OR
        nama_barang LIKE :keyword OR
        tempat LIKE :keyword OR
        kategori LIKE :keyword ');
		$this->db->bind('keyword',"%$data%");
        $this->db->execute();
		return $this->db->resultSet();
	}




}