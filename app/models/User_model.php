<?php

class User_model{
    private $table = 'users';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function tambahUser($data){
        $query = "INSERT INTO users (username,password,firstname,lastname,tgl_lahir,email)
            VALUES (:username, :password, :firstname, :lastname , :tgl_lahir , :email)
           ";

        $password = password_hash($data['password'],PASSWORD_DEFAULT);
        $username = strtolower(stripcslashes($data["username"]));
        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->bind('firstname', $data['first_name']);
        $this->db->bind('lastname', $data['last_name']);
        $this->db->bind('tgl_lahir', $data['date']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cekUsername(){
        $username = $_POST['username'];
		$this->db->query("SELECT * FROM users WHERE username = :username");
		$this->db->bind('username', $username);
		return $this->db->single();
    }
    public function countUsername(){
        $username = $_POST['username'];
		$this->db->query("SELECT * FROM users WHERE username = :username");
		$this->db->bind('username', $username);
		return $this->db->rowCount();
    }
}