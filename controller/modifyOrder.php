<?php 
include("../database/connectDB.php");
include("../database/dbOrder.php");
?>
<?php
	session_start();
    $conn = connectDB();
    if(isset($_POST['addOrder'])){
    	$accID = $_SESSION['accID'];
    	$name = $_POST['name'];
    	$address = $_POST['address'];
    	$phone = $_POST['phone'];
    	$email = $_POST['email'];
    	$shipping = $_POST['shipping'];
    	$payment = $_POST['payment'];
    	$message = $_POST['message'];
        if(empty($name)||empty($address)||empty($phone)||empty($email)){
            echo "noinfo";
            return 0;
        }
    	addOrder($accID, $name, $address, $phone, $message, $shipping, $payment, $conn);
    }
?>