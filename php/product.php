<?php 
session_start();
include("../database/connectDB.php");
include("../database/dbCart.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link type="text/css" rel="stylesheet" href="../plugins//slick.css" />
<link type="text/css" rel="stylesheet" href="../plugins/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="../plugins//slick-theme.css" />
<link type="text/css" rel="stylesheet" href="../plugins//nouislider.min.css" />
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/flexslider/flexslider.css">
<link rel="stylesheet" type="text/css" href="../styles/product.css">
<link rel="stylesheet" type="text/css" href="../styles/category.css">
<link rel="stylesheet" type="text/css" href="../styles/product_responsive.css">
<link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>

<?php include("header.php");?>
<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Product Page</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="./index.php">Home</a></li>
							<li><a href="category.php"><?php if($_SESSION['type']=='M') echo'Man';elseif($_SESSION['type']=='F') echo 'Woman';else echo 'Kids';?></a></li>
							<li><?php echo $_SESSION['product']['proName']; ?></li>
						</ul>
					</div>
				</div>
			</div>
</div>
<div class="product" id='<?php echo $_GET['proID'];?>'>
			<div class="container">
				<div class="row">
					
					<!-- Product Image -->
					<div class="col-lg-6">
						<div class="product_image_slider_container">
							<div id="slider" class="flexslider">
								<ul class="slides">
										<?php
										foreach($_SESSION['product_image'] as  $i){
											echo '<li><img src="../'.$i.'" /></li>';
										}
										?>
								</ul>
							</div>
							<div class="carousel_container">
								<div id="carousel" class="flexslider">
									<ul class="slides">
									<?php
											foreach($_SESSION['product_image'] as  $i){
											echo '<li><div><img src="../'.$i.'" /></div></li>';
										}
										?>
									</ul>
								</div>
								<div class="fs_prev fs_nav disabled"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
								<div class="fs_next fs_nav"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
					
					<!-- Product Info -->
					<div class="col-lg-6 product_col ">
						<div class="product_info">
							<div class="product_name"><?php  echo $_SESSION['product']['proName'];?></div>
							<div class="product_category">In <<?php echo 'a href="../controller/controlcategory.php?type='.$_SESSION['type'].'&page=1"';?>><?php if($_SESSION['type']=='M') echo'Man';elseif($_SESSION['type']=='F') echo 'Woman';else echo 'Kids';?></a></div>
							<div class="product_rating_container d-flex flex-row align-items-center justify-content-start">
								<div class="rating_r rating_r_3 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="product_reviews">4.7 out of (3514)</div>
								<div class="product_reviews_link" style="cursor: pointer" data-toggle="modal" data-target="#rateModal">Reviews</div>
							</div>
							<div class="product_price text-danger"><?php  echo $_SESSION['product']['price'];?></div>
							<div class =" mt-2 border-top border-bottom text-dark"> <h6 class="mt-1"> Miễn phí vận chuyển cho đơn hàng từ 499.000Đ</h6></div>
							<div class ="border-top border-bottom text-dark"> <h6 class="mt-1"> Đổi trả sản phẩm nguyên giá, giảm giá trong vòng 15 ngày</h6></div>
							<div class="product_size">
								<div class="product_size_title">Select Size</div>
								<ul class="d-flex flex-row align-items-start justify-content-start">
									
									<?php
										$tmp = array();
										for( $t = 0 ; $t < sizeof( $_SESSION['product_option']) ; $t++){
											$i =  $_SESSION['product_option'][$t]['size'];
											if(!in_array($i,$tmp)){
											array_push($tmp,$i);
											echo '<li>';
											echo '<input type="radio" id="radio_'.$i.'"name="size_radio" class="regular_radio" checked value="'.$i.'">';
											echo '<label for="radio_'.$i.'">'.$i.'</label>';
											echo '</li>';
											}
									}
									?>
								</ul>
							</div>
							<div class="product_size">
								<div class="product_size_title">Select Color</div>
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<?php
										$tmp = array();
										for( $t = 0 ; $t < sizeof( $_SESSION['product_option']) ; $t++){
											$i =  $_SESSION['product_option'][$t]['color'];
											if(!in_array($i,$tmp)){
											array_push($tmp,$i);
											echo '<li>';
											echo '<input type="radio" id="radio_'.$i.'"name="color_radio" class="regular_radio" checked value="'.$i.'">';
											echo '<label for="radio_'.$i.'"><img src="../images/color/'.$i.'.png" width="36px" height="36px"></label>';
											echo '</li>';
											}
									}
									?>
								
								</ul>
							</div>
							<br/>
				
							<div class="text-center" id="addCart">
								<div class="text-right d-flex flex-row align-items-start justify-content-start">
									<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
										<div><div><input name="" id="" class="btn btn-primary bg-danger text-center" type="submit" value="Thêm vào giỏ hàng"></div></div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
<?php require('productDetail.php');
		printDetail($_SESSION['product']['description'],$_SESSION['product']['material'],$_SESSION['CmtandRate']);
?>
<?php
 require("../database/getProduct.php");
  require("product_box.php");
  $conn = connectDB();
  $arr =  getProduct($conn);
  echo'<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Picked For You</h2>
					</div>
				</div>
	';
	
    for ($i = 0 ; $i < 4; $i++){
			
        printproduct3($arr[$i]['proID'],$arr[$i]['url'],$arr[$i]['price'],$arr[$i]['proName']);
  }
  
  echo "</div></div></div></div>";
?>
		<div class="boxes">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="box d-flex flex-row align-items-center justify-content-start" id="size" style="cursor: pointer" data-toggle="modal" data-target="#sizeModal">
							<div class="mt-auto"><div class="box_image"><img src="../images/boxes_1.png" alt=""></div></div>
							<div class="box_content">
								<div class="box_title">Hướng dẫn chọn size</div>
								<div class="box_text">Tham khảo để chọn size vừa vặn nhất với bạn</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 box_col">
						<div class="box d-flex flex-row align-items-center justify-content-start">
							<div class="mt-auto"><div class="box_image"><img src="../images/boxes_2.png" alt=""></div></div>
							<div class="box_content">
								<div class="box_title">Vận chuyển</div>
								<div class="box_text">Tham khảo để có thông tin về chính sách vận chuyển áp dụng</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>



<!-- Modal -->
<div class="modal fade" id="sizeModal" role="dialog" aria-labelledby="sizeGuide" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    	<div class="modal-header">
        <h5 class="modal-title" id="sizeTitle">Bảng so kích cỡ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      	</div>
      	<div class="modal-body">
        	<img src="../images/size.png">
      	</div>
      
    </div>
  </div>
</div>


<div class="modal fade" id="rateModal" role="dialog" aria-labelledby="sizeGuide" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    	<div class="modal-header">
        <h5 class="modal-title" id="sizeTitle">Bảng so kích cỡ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      	</div>
      	<div class="modal-body">
        	<div class="product_rating_container d-flex flex-row align-items-center justify-content-start">
				<div class="rating_r rating_r_3 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
				<div class="product_reviews">4.7 out of (3514)</div>
			</div>

      	</div>
      
    </div>
  </div>
  </div>
 </div>

<?php require('./footer.php'); ?>
</div>
  </div>
 </div>

<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script>
	$('#addCart').on('click', event =>{
		var proID = $(".product").attr("id");
		var data = {
			'add'	: '1',
			'proID' : proID,
        	'accID' : '1',
        	'size'  : $("input[name='size_radio']:checked").val(),
        	'color' : $("input[name='color_radio']:checked").val()
        };
        $.ajax({
            type        : 'POST', 
            url         : '../controller/modifyCart.php', 
            data        : data, 
        	success:function(){
        		var cartItems = parseInt($(".cart a > div > div").text());
        		$(".cart a > div > div").text(cartItems +1)
        	},
        	error:function(){
				alert("Error")
			}

        })
	});
	$(document).ready(function() {
 
 	$("#owl-demo").owlCarousel({

   navigation : false, // Show next and prev buttons
   slideSpeed : 300,
   paginationSpeed : 400,
   singleItem:true,
   responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:3,
            loop:false
        }
    }
	});

</script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../styles/bootstrap-4.1.2/popper.js"></script>
<script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/progressbar/progressbar.min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../plugins/flexslider/jquery.flexslider-min.js"></script>
<script src="../js/slick.min.js"></script>
<script src="../js/nouislider.min.js"></script>
<script src="../js/jquery.zoom.min.js"></script>
<script src="../js/product.js"></script>
</body>
</html>