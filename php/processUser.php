<?php
include("../database/connectDB.php");
$conn = connectDB();

$username = $_POST['username'];
$name     = $_POST['name'];
$address  = $_POST['address'];
$phone    = $_POST['phone'];


$sql = "UPDATE account SET username='$username', name='$name', address='$address', phone='$phone' WHERE accID='1'";


if (mysqli_query($conn, $sql)) {
    header('Location: info_user.php');
} else {
    header('Location: updateUser.php');
}

mysqli_close($conn);