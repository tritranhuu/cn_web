<?php 
include("../database/connectDB.php");
include("../database/dbOrder.php");
?>
<?php
	session_start();
    $conn = connectDB();
    if(isset($_POST['addOrder'])){
    	$accID = $_POST['accID'];
    	$name = $_POST['name'];
    	$address = $_POST['address'];
    	$phone = $_POST['phone'];
    	$email = $_POST['email'];
    	$shipping = $_POST['shipping'];
    	$payment = $_POST['payment'];
    	$message = $_POST['message'];
    	addOrder($accID, $name, $address, $phone, $message, $shipping, $payment, $conn);
    }
?>