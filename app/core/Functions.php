<?php
class Functions{
    public static function configLogin(){

        if (isset($_SESSION["login"])) {
            return '<a class="nav-link " href="'. BASEURL . '/logout">Logout</a>';
        } else {
            return '<a class="nav-link " href="'. BASEURL . '/login">Login</a>';
        }
        
    }
    public static function barangUser(){
        if (isset($_SESSION["login"])) {
            return '<a class="nav-link " href="'. BASEURL . '/barang/temuanku">Temuanku</a>';
        }
    }
    
}