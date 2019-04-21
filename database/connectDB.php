<?php
	function connectDB(){
        $hostname = 'localhost:3306';
        $username = 'root';
        $password = 'Tri200698';
        $dbname = "clothes_shop";                
        $conn = mysqli_connect($hostname, $username, $password,$dbname);
        return $conn;
    }
?>