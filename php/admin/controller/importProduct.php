<?php
include("../model/updateDatabase.php");
?>
<?php
	if(isset($_POST['import'])){
		$proID = $_POST['proID'];
		$size = $_POST['size'];
		$color = $_POST['color'];
		$quantity = $_POST['quantity'];

		if(empty($size)||empty($color)||empty($quantity)){
			echo "noinfo";
			return 0;
		}
	importProduct($proID, $size, $color, $quantity);			
	}
?>