
<?php
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