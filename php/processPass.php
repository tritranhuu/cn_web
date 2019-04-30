<?php
include("../database/connectDB.php");
$conn = connectDB();
$password = $_POST['newpass1'];

$sql = "UPDATE account SET password='$password' WHERE accID='1'";

if (mysqli_query($conn, $sql)) {
    header('Location: info_user.php');
} else {
    header('Location: updatePass.php');
}

mysqli_close($conn);