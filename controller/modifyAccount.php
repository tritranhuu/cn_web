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
		findCheckAccountByUsername($username, $password, $conn);
	}
?>