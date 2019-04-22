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
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/flexslider/flexslider.css">
<link rel="stylesheet" type="text/css" href="../styles/product.css">
<link rel="stylesheet" type="text/css" href="../styles/product_responsive.css">
<script src="../js/jquery-3.2.1.min.js"></script>
</head>

<?php include("header.php");?>

<div class="product" id='<?php echo $_GET['proID'];?>'>
			<div class="container">
				<div class="row">
					
					<!-- Product Image -->
					<div class="col-lg-6">
						<div class="product_image_slider_container" style="padding-top: 100px">
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
					<div class="col-lg-6 product_col">
						<div class="product_info">
							<div class="product_name"><?php  echo $_SESSION['product']['proName'];?></div>
							<div class="product_category">In <a href="category.html">Category</a></div>
							<div class="product_rating_container d-flex flex-row align-items-center justify-content-start">
								<div class="rating_r rating_r_3 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="product_reviews">4.7 out of (3514)</div>
								<div class="product_reviews_link" style="cursor: pointer" data-toggle="modal" data-target="#rateModal">Reviews</div>
							</div>
							<div class="product_price"><?php  echo $_SESSION['product']['price'];?></div>
							<div class="product_size">
								<div class="product_size_title">Select Size</div>
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>
										<input type="radio" id="radio_2" name="size_radio" class="regular_radio radio_2" value="S" checked>
										<label for="radio_2">S</label>
									</li>
									<li>
										<input type="radio" id="radio_3" name="size_radio" class="regular_radio radio_3" value="M">
										<label for="radio_3">M</label>
									</li>
									<li>
										<input type="radio" id="radio_4" name="size_radio" class="regular_radio radio_4" value="L">
										<label for="radio_4">L</label>
									</li>
									<li>
										<input type="radio" id="radio_5" name="size_radio" class="regular_radio radio_5" value="XL">
										<label for="radio_5">XL</label>
									</li>
								</ul>
							</div>
							<div class="product_size">
								<div class="product_size_title">Select Color</div>
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>
										<input type="radio" id="radio_7" disabled name="color_radio" class="regular_radio radio_7" value="Red">
										<label for="radio_7"><img src="../images/color/1.png" width="36px" height="36px"></label>
									</li>
									<li>
										<input type="radio" id="radio_8" name="color_radio" class="regular_radio radio_8" checked value="Black">
										<label for="radio_8"><img src="../images/color/1.png" width="36px" height="36px"></label>
									</li>
									<li>
										<input type="radio" id="radio_9" name="color_radio" class="regular_radio radio_9" value="Red">
										<label for="radio_9">B</label>
									</li>
									<li>
										<input type="radio" id="radio_10" disabled name="color_radio" class="regular_radio radio_10" value="Red">
										<label for="radio_10">W</label>
									</li>
								</ul>
							</div>
							<div class="product_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec consequat lorem. Maecenas elementum at diam consequat bibendum. Mauris iaculis fringilla ex, sit amet semper libero facilisis sit amet. Nunc ut aliquet metus. Praesent pulvinar justo sed velit tempus bibendum. Quisque dictum lorem id mi viverra, in auctor justo laoreet. Nam at massa malesuada, ullamcorper metus vel, consequat risus. Phasellus ultricies velit vel accumsan porta.</p>
							</div>
							<div class="product_buttons" id="addCart">
								<div class="text-right d-flex flex-row align-items-start justify-content-start">
									<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
										<div><div><img src="../images/cart.svg" class="svg" alt=""><div>+</div></div></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

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
	})

</script>

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
<script src="../plugins/flexslider/jquery.flexslider-min.js"></script>
<script src="../js/product.js"></script>
</body>
</html>