<?php
    function connectDB(){
        if(!defined('DB_SERVER'))
        define("DB_SERVER", "localhost:3306");
        if(!defined("DB_USER"))
        define("DB_USER", "root");
        if(!defined("DB_PASSWORD"))
        define("DB_PASSWORD", "Tri200698");
        if(!defined("DB_DATABASE"))
        define("DB_DATABASE", "clothes_shop");            
        $conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
        mysqli_set_charset($conn, 'UTF8');
        if(!$conn) {
            define("DB_PASSWORD", "12345");
            $conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
        }
        if(!$conn) {
            define("DB_PASSWORD", "059877"); 
            $conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
        }
        return $conn;
    }
?>