<?php
include("../model/updateDatabase.php");
?>
<?php
if(isset($_POST['addVendor'])){
	$name = $_POST['vendor'];
	addVendor($name);
}
?>