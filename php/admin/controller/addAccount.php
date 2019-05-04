<?php
include('../model/updateDatabase.php'); 
?>

<?php
	if(isset($_POST['addAccount'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$password = $_POST['pass'];
		$admin = $_POST['admin'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		addAccount($username, $password, $name, $address, $phone, $admin, $email, $gender);
	}
?>