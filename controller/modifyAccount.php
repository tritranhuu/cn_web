<?php 
include('../database/connectDB.php');
include('../database/dbAccount.php');
?>
<?php
	session_start();
	$conn = connectDB();
	if(isset($_POST['create'])){
		$a = $_POST['create'];
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$password = $_POST['pass'];
		createNewAccount($username, $password, $name, $email, $gender, $conn);
	}
	else if(isset($_POST['login'])){
		$a = $_POST['login'];
		$username = $_POST['username'];
		$password = $_POST['pass'];
		$accID = findCheckAccountByUsername($username, $password, $conn);
		$name = findNameById($accID, $conn);
		if($accID >= 0){
			$_SESSION['accID'] = $accID;
			$_SESSION['name'] = $name;
			echo 1;
			$admin = checkAdminByAccID($accID, $conn);
			if((int)$admin>0){
				$_SESSION['admin'] = 1;
			}
		}
		echo 0;
	}
	else if(isset($_POST['update'])){
		$accID = $_SESSION['accID'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		updateAccount($accID, $name, $address, $phone, $gender, $conn); 
	}

	else if(isset($_POST['updatePasswd'])){
		$accID = $_SESSION['accID'];
		$oldPass = $_POST['oldpass'];
		$newPass = $_POST['newpass'];
		if(updatePasswd($accID, $oldPass, $newPass, $conn)){
			echo "success";
		}
		else{
			echo "wrongpass";
		}
	}
?>