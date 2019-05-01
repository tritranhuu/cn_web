
<?php

    function createNewAccount($username, $password, $name, $email, $gender, $conn){
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
    	$query = "insert into account (username, password, name,email, gender) values ('".$username."', '".$password."', N'".$name."','".$email."', '".$gender."')";
		mysqli_query($conn,$query);
		return 1;
	}

	function findCheckAccountByUsername($username,$password,$conn){
		$query ="select password, accID from account where username='". $username . "'";
    	$sql = mysqli_query($conn,$query);
		if(mysqli_num_rows($sql)==1){
			$result = mysqli_fetch_array($sql);
			if($result['password'] === $password){
				return $result['accID'];
			}
		}
		return -1;
	}

	function checkAdminByAccID($accID, $conn){
		$query = "select admin from account where accID=".$accID;
		$sql = mysqli_query($conn,$query);
		if(mysqli_num_rows($sql)==1){
			$result = mysqli_fetch_array($sql);
			return $result['admin'];
		}
		return -1;
	}

	function findNameById($accID, $conn){
		$query = "select name from account where accID=".$accID;
		$sql = mysqli_query($conn,$query);
		if(mysqli_num_rows($sql)==1){
			$result = mysqli_fetch_array($sql);
			$fullname = $result['name'];
			$name = substr(strrchr($fullname, " "), 1);
			return $name;
		}
		return -1;
	}

	function getInfoByAccID($accID){
		$conn = connectDB();
		$query = "select * from account where accID=".$accID;
		$sql = mysqli_query($conn,$query);
		if(mysqli_num_rows($sql)==1){
			$result = mysqli_fetch_array($sql);
			$account = array(
				'username' => $result['username'],
				'name' => $result['name'],
				'address' => $result['address'],
				'phone' => $result['phone'],
				'email' => $result['email'],
				'gender' => $result['gender']
				);
			return $account;
		}
		return -1;
	}

	function updateAccount($accID, $name, $address, $phone, $gender, $conn){
		$query = "UPDATE account SET gender='$gender', name=N'$name', address=N'$address', phone='$phone' WHERE accID=".$accID;
		mysqli_query($conn, $query);
	}

	function updatePasswd($accID, $oldPass, $newPass, $conn){
		$query = "select password from account where accID=".$accID;
		$sql = mysqli_query($conn,$query);
		if(mysqli_num_rows($sql)==1){
			$result = mysqli_fetch_array($sql);
			if($result['password'] === $oldPass){
				$updateQuery = "UPDATE account SET password='$newPass' WHERE accID=".$accID;
				mysqli_query($conn, $updateQuery);
				return 1;
			}
		}
		return 0;
	}

?>