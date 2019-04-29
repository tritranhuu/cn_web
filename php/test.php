<!DOCTYPE html>
<html lang="en">
<?php
session_start();
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
<link rel="stylesheet" type="text/css" href="../styles/category.css">
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
<?php 
include("../database/connectDB.php");
include("../database/dbCart.php"); 
?>

<?php require("header.php");?>
<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Product Page</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="./index.php">Home</a></li>
							<li><<?php echo 'a href="../controller/controlcategory.php?type='.$_SESSION['type'].'&page=1"';?>><?php if($_SESSION['type']=='M') echo'Man';elseif($_SESSION['type']=='F') echo 'Woman';else echo 'Kids';?></a></li>
							<li>New Products</li>
						</ul>
					</div>
				</div>
			</div>
</div>
<br/><br/><br/><br/>
<div class="container">
				<div class="row products_bar_row">
					<div class="col">
						<div class="products_bar d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
							<div class="products_bar_links">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li><a href="#">All</a></li>
									<li><a href="#">Hot Products</a></li>
									<li class="active"><a href="#">New Products</a></li>
									<li><a href="#">Sale Products</a></li>
								</ul>
							</div>
							<div class="products_bar_side d-flex flex-row align-items-center justify-content-start ml-lg-auto">
								<div class="products_dropdown product_dropdown_sorting">
									<div class="isotope_sorting_text"><span>Default Sorting</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
									<ul>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>Default</li>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>Price</li>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>Name</li>
									</ul>
								</div>
								<div class="product_view d-flex flex-row align-items-center justify-content-start">
									<div class="view_item active"><img src="images/view_1.png" alt=""></div>
									<div class="view_item"><img src="images/view_2.png" alt=""></div>
									<div class="view_item"><img src="images/view_3.png" alt=""></div>
								</div>
								<div class="products_dropdown text-right product_dropdown_filter">
									<div class="isotope_filter_text"><span>Filter</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
									<ul>
										<li class="item_filter_btn" data-filter="*">All</li>
										<li class="item_filter_btn" data-filter=".hot">Hot</li>
										<li class="item_filter_btn" data-filter=".new">New</li>
										<li class="item_filter_btn" data-filter=".sale">Sale</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
	</div>
				
<?php
	require("../database/getProduct.php");
	require("product_box.php");
    $conn = connectDB();
	$arr =  $_SESSION[$_SESSION['type']];
	echo'<div class="products">
	<div class="container">
	';
	echo "<div class=\"row products_row products_container \">";
    for ($i = 12*($_SESSION['page']-1),$t=0 ; ; $i++,$t++){
		if($t==12|| ($i+1) == $_SESSION['max']) break;
		printproduct($arr[$i]['proID'],$arr[$i]['url'],$arr[$i]['price'],$arr[$i]['proName']);
		
	}
	echo "</div></div></div></div></div></div></div>";
?>
<?php
	if($_SESSION['page']==1){
		echo'<div class="row page_nav_row">
		<div class="col">
			<div class="page_nav">
				<ul class="d-flex flex-row align-items-start justify-content-center">
						<li class="active"><a href="">01</a></li>
						<li><a href="../controller/controlcategory.php?type='.$_SESSION['type'].'&page=2">02</a></li>
						<li><a href="../controller/controlcategory.php?type='.$_SESSION['type'].'&page=3">03</a></li>';
						echo '<li><a href="../controller/controlcategory.php?type=M&page='.($_SESSION['page']+1).'">></a></li>
				</ul>
			</div>
		</div>
	</div>';
	}
	elseif( $_SESSION['page'] == ceil($_SESSION['max']/12)){
		echo'<div class="row page_nav_row">
		<div class="col">
			<div class="page_nav">
				<ul class="d-flex flex-row align-items-start justify-content-center">';
				echo '<li><a href="../controller/controlcategory.php?type='.$_SESSION['type'].'&page='.($_SESSION['page']-1).'"><</a></li>';
		for($i = $_SESSION['page'] -4 ; $i<=$_SESSION['page'] && $i<= ceil($_SESSION['max']/12);$i++){
			if($i!=$_SESSION['page'])
			echo '<li><a href="../controller/controlcategory.php?type='.$_SESSION['type'].'&page='.$i.'">'.$i.'</a></li>';
			else 
			echo '<li class="active"><a  href="../controller/controlcategory.php?type='.$_SESSION['type'].'&page='.$i.'">'.$i.'</a></li>';
		}
			
		echo'</ul>
			</div>
		</div>
	</div>';
	}
	else {
		echo'<div class="row page_nav_row">
		<div class="col">
			<div class="page_nav">
				<ul class="d-flex flex-row align-items-start justify-content-center">';
				echo '<li><a href="../controller/controlcategory.php?type='.$_SESSION['type'].'&page='.($_SESSION['page']-1).'"><</a></li>';
		for($i = $_SESSION['page'] -1 ; $i<$_SESSION['page'] + 3&& $i<= ceil($_SESSION['max']/12) ;$i++){
			if($i!=$_SESSION['page'])
			echo '<li><a href="../controller/controlcategory.php?type='.$_SESSION['type'].'&page='.$i.'">'.$i.'</a></li>';
			else 
			echo '<li class="active"><a  href="../controller/controlcategory.php?type='.$_SESSION['type'].'&page='.$i.'">'.$i.'</a></li>';
		}
		echo '<li><a href="../controller/controlcategory.php?type='.$_SESSION['type'].'&page='.($_SESSION['page']+1).'">></a></li>';
			
		echo'</ul>
			</div>
		</div>
	</div>';
	}
?>
<br/> <br/>
<script>
	function addToCart(id) {
		
		if (localStorage[id]){
  			localStorage[id] = Number(localStorage[id]) + 1;
		} else {
  			localStorage[id] = 1;
		}
		
	}
</script>

</div>

<?php require("footer.php");?>
</div>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap-4.1.2/popper.js"></script>
<script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/progressbar/progressbar.min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="../plugins/Isotope/fitcolumns.js"></script>
<script src="../js/category.js"></script>
</body>
</html>