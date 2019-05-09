<?php
include("../model/updateDatabase.php");
?>
<?php
	if(isset($_POST['edit'])){
	$proName = $_POST['proName'];
	$proID = $_POST['proID'];
	$price = $_POST['price'];
	$type = $_POST['type'];
	$description = $_POST['description'];
	$material = $_POST['material'];
	$gender = $_POST['gender'];
	$import_price = $_POST['import_price'];
	if(empty($proName)||empty($gender)||empty($material)||empty($description)||empty($type)||empty($price)){
		echo "noinfo";
		return 0;
	}
	editProduct($proID, $proName, $price, $type, $description, $material, $gender, $import_price);
	}
?>