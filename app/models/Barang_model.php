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

    public function tambahDataBarang($data){
        $tanggal = 'date';
        $query = "INSERT INTO barang VALUES 
            ('', :judul_barang , :nama_barang , :tempat , :date , :gambar , :deskripsi , :kontak)";
        $this->db->query($query);
        $this->db->bind('judul_barang', $data['judul_barang']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('tempat', $data['tempat']);
        $this->db->bind('date', $data['date']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('kontak', $data['kontak']);

        $this->db->execute();

        return $this->db->rowCount();
    }




}