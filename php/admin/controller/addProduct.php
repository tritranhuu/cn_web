<?php
include("../model/updateDatabase.php");
?>
<?php
if(isset($_POST['addProduct'])){
	$proName = $_POST['proName'];
	$date = date('d-m-Y ', time());
	$price = $_POST['price'];
	$type = $_POST['type'];
	$description = $_POST['description'];
	$material = $_POST['material'];
	$companyName = $_POST['companyName'];
	$gender = $_POST['gender'];
	$import_price = $_POST['import_price'];
	if(empty($proName)||empty($gender)||empty($companyName)||empty($material)||empty($description)||empty($type)||empty($price)){
		echo "noinfo";
		return 0;
	}
	if($_SESSION['proName'] == $proName){
		return 0;
	}
	else{
		$_SESSION['proName'] = $proName;
	}
 	addProduct($proName, $price, $type, $description, $material, $companyName, $gender, $import_price,$date);

}
?>