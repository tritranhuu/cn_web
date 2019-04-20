<?php
    function connectDB(){
        $hostname = 'localhost:3306';
        $username = 'root';
        $password = 'Tri200698';
        $dbname = "clothes_shop";                
        $conn = mysqli_connect($hostname, $username, $password,$dbname);
        return $conn;
    }

    function createNewAccount($username, $password, $name, $email, $gender, $conn){
    	$query = "insert into account (username, password, name,email, gender) values ('".$username."', '".$password."', N'".$name."','".$email."', '".$gender."')";
		mysqli_query($conn,$query);
	}

	function findCheckAccountByUsername($username,$password,$conn){
		$query ="select password from account where username='". $username . "'";
    	$sql = mysqli_query($conn,$query);
    	$result = mysqli_fetch_array($sql);
		
	}

?>