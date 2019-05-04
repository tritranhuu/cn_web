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
        mysqli_set_charset($conn,"utf8");
        return $conn;
    }

    function getAllOrder(){
    	$conn = connectDB();
    	$query = "select * from order_product";
    	return mysqli_query($conn, $query);
    }

    function getAllProduct(){
        $conn = connectDB();

        $query = "select * from product join company where product.companyID = company.companyID";
        return mysqli_query($conn, $query);
    }

    function getAllCompany(){
        $conn = connectDB();
        $query = "select companyName from company";
        return mysqli_query($conn, $query);
    }

    function getAllAccount(){
        $conn = connectDB();
        $query = "select * from account";
        return mysqli_query($conn, $query); 
    }
    
    function getOrderNum(){
        $conn = connectDB();
        $query = "select * from order_product";
        $sql = mysqli_query($conn, $query);
        return mysqli_num_rows($sql);
    }
    
    function getAccountNum(){
        $conn = connectDB();
        $query = "select * from account";
        $sql = mysqli_query($conn, $query);
        return mysqli_num_rows($sql);
    }


    function getSoldNum(){
        $conn = connectDB();
        $query = "select sum(quantity) as sold from detail_order";
        $sql = mysqli_query($conn, $query);
        $res = mysqli_fetch_array($sql);
        return $res['sold'];
    }

    function getIncome(){
        $conn = connectDB();
        $query = "select sum(total) as tol from order_product";
        $sql = mysqli_query($conn, $query);
        $res = mysqli_fetch_array($sql);
        return $res['tol'];
    }

    function getProductByID($proID){
        $conn = connectDB();
        $query = "select * from product where proID=".$proID;
        $sql = mysqli_query($conn, $query);
        $res = mysqli_fetch_array($sql);
        return $res['tol'];        
    }
?>