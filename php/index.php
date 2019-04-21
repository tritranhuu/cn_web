<!DOCTYPE html>
<html lang="en">
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<head>
<title>Little Closet</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
<?php 
include("../database/connectDB.php");
include("../database/dbCart.php"); 
?>

<?php require("header.php");?>
<?php require("slide.php");?>

<?php
	require("../database/getProduct.php");
	require("product_box.php");
    $conn = connectDB();
	$arr =  getProduct($conn);
	echo'<div class="products">
	<div class="container">
	';
	echo "<div class=\"row products_row\">";
    for ($i = 0 ; $i < sizeof($arr); $i++){
        printproduct($arr[$i]['proID'],$arr[$i]['url'],$arr[$i]['price'],$arr[$i]['proName']);
	}
	echo "</div>";
?>


<script>
	function addToCart(id) {
		
		if (localStorage[id]){
  			localStorage[id] = Number(localStorage[id]) + 1;
		} else {
  			localStorage[id] = 1;
		}
		
	}
</script>

<?php require("footer.php");?>
</body>
</html>