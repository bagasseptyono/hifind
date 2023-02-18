<?php
class Functions{
    public static function configLogin(){

        if (isset($_SESSION["login"])) {
            return '<a class="nav-link text-primary " href="'. BASEURL . '/logout">Logout</a>';
        } else {
            return '<a class="nav-link text-primary " href="'. BASEURL . '/login">Login</a>';
        }
        
    }
    public static function barangUser(){
        if (isset($_SESSION["login"])) {
            return '<a class="nav-link text-primary " href="'. BASEURL . '/barang/temuanku">Temuanku</a>';
        }
    }
    public static function setKategori($data)
    {
        $_POST["barang"]['kategori'] = $data;
    }
    public static function kategori($data){
        $kategori = $data;
        if ($kategori == "Menemukan") {
            return '<span class="badge bg-success ">'.$kategori .'</span>';
        } else {
            return '<span class="badge bg-warning ">'.$kategori .'</span>';
        }
        
    }

    
}