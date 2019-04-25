<?php
include("../model/updateDatabase.php");
?>
<?php
if(isset($_POST['addProduct'])){
	$proName = $_POST['proName'];
	$price = $_POST['price'];
	$type = $_POST['type'];
	$description = $_POST['description'];
	$material = $_POST['material'];
	$companyName = $_POST['companyName'];
	$gender = $_POST['gender'];
	$import_price = $_POST['import_price'];

 	addProduct($proName, $price, $type, $description, $material, $companyName, $gender, $import_price);

}
?>