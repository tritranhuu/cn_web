<?php
include("../model/updateDatabase.php");
?>
<?php
if(isset($_POST['changeStatus'])){
	$orderID = $_POST['orderID'];
	$status = $_POST['status'];
	changeStatus($orderID, $status);
}
?>