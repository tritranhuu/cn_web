<?php
include('../model/updateDatabase.php'); 
?>

<?php
		if(isset($_POST['editAccount'])){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$password = $_POST['pass'];
			$admin = $_POST['admin'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			
			editAccount($username, $password, $name, $address, $phone, $admin, $email, $gender,$id);
		}
		if(isset($_POST['delAccount'])){
			$id = $_POST['id'];
			delAcc($id);
		}
	
?>