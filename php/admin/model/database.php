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
        return $conn;
    }

    function getAllOrder(){
    	$conn = connectDB();
    	$query = "select * from order_product";
    	return mysqli_query($conn, $query);
    }

    function getAllProduct(){
        $conn = connectDB();
        $query = "select * from product natural join company";
        return mysqli_query($conn, $query);
    }

    function getAllCompany(){
        $conn = connectDB();
        $query = "select companyName from company";
        return mysqli_query($conn, $query);
    }

    
?>