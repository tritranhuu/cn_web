<?php 
session_start();
include("../database/connectDB.php");
include("../database/dbCart.php"); 
require_once("../database/getProduct.php");
$conn = connectDB();

if(!isset($_GET['product'])){
	header('Location: index.php');
}

$proID = $_GET['product'];

$pro =  getInfoProduct($conn,$proID);
$image = getImageProduct($conn,$proID);
$option = getOptionProduct($conn,$proID);
$cmtandrate = getCmtandRate($conn,$proID);
$type = $pro['gender'];
$proName = $pro['proName'];
$des = $pro['description'];
$mat = $pro['material'];
$price = $pro['price'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<link rel="stylesheet" type="text/css" href="../styles/product_responsive.css">
<link rel="stylesheet" type="text/css" href="../styles/style.css">
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<?php include("header.php");?>
<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Product Page</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="./index.php">Home</a></li>
							<li><a href="category.php?type=<?php echo $type ?>"><?php if($type=='M') echo'Man';elseif($type=='F') echo 'Woman';else echo 'Kids';?></a></li>
							<li><?php echo $proName; ?></li>
						</ul>
					</div>
				</div>
			</div>
</div>
<div class="product" id="<?php echo $proID;?>">
			<div class="container">
				<div class="row">
					
					<!-- Product Image -->
					<div class="col-lg-6">
						<div class="product_image_slider_container">
							<div id="slider" class="flexslider">
								<ul class="slides">
										<?php
										foreach($image as  $i){
											echo '<li><img src="../'.$i.'" /></li>';
										}
										?>
								</ul>
							</div>
							<div class="carousel_container">
								<div id="carousel" class="flexslider">
									<ul class="slides">
									<?php
											foreach($image as  $i){
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
							<div class="product_name"><?php  echo $proName;?></div>
							<div class="product_category">In <<?php echo 'a href="../controller/controlcategory.php?type='.$type.'&page=1"';?>><?php if($type=='M') echo'Man';elseif($type=='F') echo 'Woman';else echo 'Kids';?></a></div>
							<div class="product_rating_container d-flex flex-row align-items-center justify-content-start">
							<div class="rating_r rating_r_3 product_rating text-dark">Đánh giá</div>
								<div class="product_reviews"><?php if(sizeof($cmtandrate)==0) echo 5; else{
									 $sum =0;
									 $c =0;
									 foreach ($cmtandrate as $k){
										 $sum += $k['point'];
										 $c++;
									 }
									 echo $sum/$c;
								}?> out of (<?php echo sizeof($cmtandrate)?>)</div>
							
								<div class="product_reviews_link" style="cursor: pointer" onclick="window.location.href='#review'">Reviews</div>
							</div>
							<div class="product_price "><?php  echo number_format((int)$price , 0, ',', '.') ;?><span>đ</span></div>
							<div class="product_size">
								<div class="product_size_title">Select Size</div>
								<ul class="d-flex flex-row align-items-start justify-content-start">
									
									<?php
										$tmp = array();
										for( $t = 0 ; $t < sizeof( $option) ; $t++){
											$i =  $option[$t]['size'];
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
										for( $t = 0 ; $t < sizeof( $option) ; $t++){
											$i =  $option[$t]['color'];
											if(!in_array($i,$tmp)){
											array_push($tmp,$i);
											echo '<li>';
											echo '<input type="radio" id="radio_'.$i.'"name="color_radio" class="regular_radio" checked value="'.$i.'">';
											echo '<label for="radio_'.$i.'"><img src="../'.$i.'" width="36px" height="36px"></label>';
											echo '</li>';
											}
									}
									?>
								
								</ul>
							</div>
							<div class="product_text"></div>
				
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
						<div class="box d-flex flex-row align-items-center justify-content-start" style="cursor: pointer" data-toggle="modal" data-target="#sizeModal">
							<div class="mt-auto"><div class="box_image"><img src="../images/boxes_1.png" alt=""></div></div>
							<div class="box_content">
								<div class="box_title">Hướng dẫn chọn size</div>
								<div class="box_text">Tham khảo để chọn size vừa vặn nhất với bạn</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 box_col">
						<div class="box d-flex flex-row align-items-center justify-content-start" style="cursor: pointer" data-toggle="modal" data-target="#shipModal">
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
<?php 
		require('./viewFunction/productDetail.php');
		printDetail($des,$mat,$cmtandrate,$pro['proID']);
?>

		
<?php
  require("./viewFunction/product_box.php");
  $conn = connectDB();
  $arr =  getProductRand($conn);
  echo'<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Xem thêm</h2>
					</div>
				</div>
	';
	
    for ($i = 0 ; $i < 4; $i++){
			
        printproduct3($arr[$i]['proID'],$arr[$i]['url'],$arr[$i]['price'],$arr[$i]['proName']);
  }
  
  echo "</div></div></div></div>";
?>
		
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


<div class="modal fade" id="shipModal" role="dialog" aria-labelledby="shipGuide" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    	<div class="modal-header">
        <h5 class="modal-title" id="sizeTitle">Chính sách vận chuyển</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      	</div>
      	<div class="modal-body">
        	<table class="table table-hover">
    <thead>
    	<tr>
    		<td width="30%"></td>
    		<td width="50%"></td>
    		<td width="20%"></td>
    	</tr>
    </thead>
    <tbody>
      <tr>
        <td>Vận chuyển nhanh (24h)</td>
        <td>Giao hàng ngay trong ngày cho bạn, nhanh chóng, tiện lợi</td>
        <td>30.000</td>
      </tr>
      <tr>
        <td>Vận chuyển cơ bản</td>
        <td>Bạn sẽ nhận được hàng sau từ 3-5 ngày kể từ ngày đặt hàng trên hệ thống</td>
        <td>10.000</td>
      </tr>
      <tr>
        <td>Đến lấy về</td>
        <td>Chúng tôi sẽ gói và giữ hàng cho bạn, bạn sẽ tới địa chỉ cửa hàng tại số 1 Đại Cồ Việt để nhận hàng</td>
        <td>Miễn phí</td>
      </tr>
    </tbody>
  </table>

      	</div>
      
    </div>
  </div>
  </div>
 </div>
<?php require('./footer.php'); ?>
</div>
  </div>
 </div>

 <script language="javascript">

	$('#submit').on('click',event =>{
			var proID = $(".product").attr("id");
			var input = $('#input').val();
			var rating =  $("input[name='rating']:checked").val();
		
			var data ={
				'input':input,
				'rating' :rating,
				'proID' : proID
			};
			$.ajax({
				type        : 'POST', 
				dataType		: "text",
        url         : '../database/insertRate.php', 
				data        : data,
				success:function(){
					window.location.href ="../controller/product_controller.php?action=index&page=1&product="+proID;
        }
			})

	});
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
        	success:function(data){
        		if (data.replace(/^\s+|\s+$/g, '') == "no_login"){
        			swal("Bạn cần đăng nhập để thực hiện chức năng này");
        		}
        		if (data.replace(/^\s+|\s+$/g, '') == "new"){
        			var cartItems = parseInt($(".cart a > div > div").text());
        			$(".cart a > div > div").text(cartItems +1)	
        		}
        	},
        	error:function(){
				alert("Error")
			}

        })
	});
	


</script>

<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>

<script src="../js/bootstrap.min.js"></script>
<script src="../styles/bootstrap-4.1.2/popper.js"></script>

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
