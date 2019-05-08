<?php include('../model/updateDatabase.php'); ?>

<?php
	if(isset($_POST['delImg'])){
		$url = $_POST['url'];
		$proID = $_POST['proID'];
		delImg($proID, $url);
		$path = "../../../".$_POST['url'];
		echo $path;
		unlink($path);
	}
?>