<?php
	function connectDB(){
        $hostname = 'localhost:3306';
        $username = 'root';
        $password = 'Tri200698';
        $dbname = "clothes_shop";                
        $conn = mysqli_connect($hostname, $username, $password,$dbname);
        if(!$conn) {
            $hostname = 'localhost:3306';
            $username = 'root';
            $dbname = "clothes_shop";  
            $password = '12345';
            $conn = mysqli_connect($hostname, $username, $password,$dbname);
        }
        if(!$conn) {
            $hostname = 'localhost:3306';
            $username = 'root';
            $dbname = "clothes_shop";  
            $password = '059877';
            $conn = mysqli_connect($hostname, $username, $password,$dbname);
        }
        return $conn;
    }
?>