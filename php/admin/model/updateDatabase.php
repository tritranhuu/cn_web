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

function getCompanyIdByName($name){
	$conn = connectDB();
	$query = "select companyID from company where companyName='".$name."'";
	$sql = mysqli_query($conn, $query);
	if(mysqli_num_rows($sql)==1){
		$res = mysqli_fetch_array($sql);
		return $res['companyID'];
	}
	return -1;
}

function addProduct($proName, $price, $type, $description, $material, $companyName, $gender, $import_price){

	$conn = connectDB();
	$companyID = getCompanyIdByName($companyName);
	echo $companyID;
	if($companyID > 0){
		$query = "insert into product (proName, price, type, created, description, material, companyID, viewed, gender, import_price) values (N'".$proName."', ".$price.", N'".$type."', 3, N'".$description."', '".$material."', ".$companyID.", 0, '".$gender."', ".$import_price.")";
		echo $query; 
		$sql = mysqli_query($conn, $query);		
	}
 }

function getNewestProID(){
 	$conn = connectDB();
	$query = "select AUTO_INCREMENT-1 as id from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA = 'clothes_shop' and TABLE_NAME   = 'product'";
	$sql = mysqli_query($conn, $query);
	$res = mysqli_fetch_array($sql);
	return $res['id'];
}

function addImg($proID, $url){
	$conn = connectDB();
	$query = "insert into img (proID, url) values (".$proID.", '".$url."')";
	$sql = mysqli_query($conn, $query);
}

function addVendor($name){
	$conn = connectDB();
	$query_check = "select * from company where companyName='".$name."'";
	$sql_check = mysqli_query($conn, $query_check);
	if(mysqli_num_rows($sql_check)>0){
		echo "duplicated";
	}
	else{
		$query = "insert into company (companyName) values ('".$name."')";
		mysqli_query($conn, $query);
		echo "added";	
	}
}

function addAccount($username, $password, $name, $address, $phone, $admin, $email, $gender){
		$conn = connectDB();
    	$query_check = "select * from account where username='".$username."' or email='".$email."'";
    	$sql_check = mysqli_query($conn, $query_check);
    	if(mysqli_num_rows($sql_check)>0){
    		$res = mysqli_fetch_array($sql_check);
    		if($res['username'] === $username){
    			echo "username";
    			return 0;
    		}
    		else{
    			echo "email";
    			return 0;
    		}
    	}
    	$query = "insert into account (username, password, name, address, phone, admin, email, gender) values ('".$username."', '".$password."', N'".$name."',N'".$address."','".$phone."',".$admin.",'".$email."', '".$gender."')";
		mysqli_query($conn,$query);
		return 1;
	}

function delImg($proID, $url){
	$conn = connectDB();
	$query = "delete from img where proID=".$proID." and url='".$url."'";
	$sql = mysqli_query($conn, $query);	
}
?>