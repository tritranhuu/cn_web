<?php
session_start();
if (!isset($_SESSION['accID']))
{
    header('Location: index.php');
}
?>

<?php 
include("../database/connectDB.php");
include("../database/dbCart.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../styles/cart.css">
<link rel="stylesheet" type="text/css" href="../styles/cart_responsive.css">
<script src="../js/jquery-3.2.1.min.js"></script>



<?php include("header.php"); ?>
<?php 
    function printCart($items){
?>
		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Shopping Cart</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Trang chủ</a></li>
							<li>Giỏ hàng của bạn</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
<div class="cart_section">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cart_container">
							
							<!-- Cart Bar -->
							<div class="cart_bar">
								<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
									<li class="mr-auto">Sản phẩm</li>
									<li>Màu sắc</li>
									<li>Kích cỡ</li>
									<li>Giá</li>
									<li>Số lượng</li>
									<li>Tổng</li>
                                    <li></li>
								</ul>
							</div>
                            <!-- Cart Items -->
							<div class="cart_items">
								<ul class="cart_items_list">

									
<?php 
	for($i=0;$i<sizeof($items);$i++){
		echo '<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start" id="itemCartli"><div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto" ><div class="pro_num"><div class="product_number">'.($i+1).'</div></div>';
		printCartItem($items[$i]);
		echo '</li>';
	}
	
?>
									
								</ul>
							</div>
							<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
								<div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="button button_clear trans_200" id="deleteCart"><a style="color: white; cursor: pointer">xóa giỏ hàng</a></div>
									<div class="button button_continue trans_200"><a style="color: white; cursor: pointer" href="index.php">tiếp tục mua sắm</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row cart_extra_row">
					<div class="col-lg-6">
						<div class="cart_extra cart_extra_1">
						<div class="cart_extra_content cart_extra_coupon">
								<div class="shipping" val="0">
									<div class="cart_extra_title">Hình Thức Vận Chuyển</div>
									<ul>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_1" name="shipping_method" class="shipping_radio" value="30000"> 
												<span class="radio_mark"></span>
												<span class="radio_text">Giao hàng 24h</span>
											</label>
											<div class="shipping_price ml-auto" >30.000đ</div>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_2" name="shipping_method" class="shipping_radio" value="10000">
												<span class="radio_mark"></span>
												<span class="radio_text">Giao hàng chuẩn</span>
											</label>
											<div class="shipping_price ml-auto" val="10000">10.000đ</div>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_3" name="shipping_method" class="shipping_radio" value="0" checked>
												<span class="radio_mark"></span>
												<span class="radio_text">Đến nhận về</span>
											</label>
											<div class="shipping_price ml-auto" val="0">Miễn phí</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 cart_extra_col">
						<div class="cart_extra cart_extra_2">
							<div class="cart_extra_content cart_extra_total">
								<div class="cart_extra_title">Tổng hóa đơn</div>
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Giá trị sản phẩm</div>
										<div class="cart_extra_total_value ml-auto" id="totalProduct">0</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Vận chuyển</div>
										<div class="cart_extra_total_value ml-auto" id="totalShip">0</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Tổng cộng</div>
										<div class="cart_extra_total_value ml-auto" id="totalCart">0</div>
									</li>
								</ul>
								<div class="checkout_button trans_200"><a href="checkout.php">Thanh Toán</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
    }
?>
                                            
<?php
    function printCartItem($item){
?>
											<div><div class="product_image"><img src="../<?php echo $item['url'];?>" alt=""></div></div>
											<div class="product_name_container">
												<div class="product_name"><a href="product.php?proID=<?php echo $item['proID'];?>"><?php echo $item['proName'];?></a></div>
												<div class="product_text"><?php echo $item['description'];?></div>
											</div>
										</div>
										<div class="product_color product_text"><span>Color: </span><img src="../<?php echo $item['color'];?>" width="36px" height="36px"></div>
										<div class="product_size product_text"><span>Size: </span><?php echo $item['size'];?></div>
										<div class="product_price product_text"><?php echo (int)$item['price'];?></div>
										<div class="product_quantity_container">
											<div class="product_quantity ml-lg-auto mr-lg-auto text-center" price='<?php echo (int)$item['price'];?>' id='<?php echo $item['optID']?>'>
												<span class="product_text product_num"><?php echo $item['quantity'];?></span>
												<div class="qty_sub qty_button trans_200 text-center"><span>-</span></div>
												<div class="qty_add qty_button trans_200 text-center"><span>+</span></div>
											</div>
										</div>
										<div class="product_total product_text"><?php echo ((int)$item['price']*(int)$item['quantity']);?></div>
                                        <div class="product_text" id='<?php echo $item['optID']?>' style="cursor: pointer"><i class="fa fa-remove" style="font-size:32px;color:red"></i></div>
<?php
    }
?>


<?php
	$conn = connectDB();
    $items = getCartByAccId($_SESSION['accID'], $conn);
    printCart($items);
	include("footer.php");
?>

<script>
var ship = $('.cart_extra_1');
var total = $('.cart_extra_2');
var shipTotal = ship.find(".shipping").attr("val");
var productTotal = parseInt(total.find("#totalProduct").text());
if($('.product_total').length)
	{
		var tol = $('.product_total');
		tol.each(function()
		{
			var sub_tol = parseInt($(this).text());
			productTotal += sub_tol;
		});
	}
total.find('#totalShip').text(shipTotal);
total.find("#totalProduct").text(productTotal);
var cartTotal = parseInt(shipTotal) + parseInt(productTotal);
total.find('#totalCart').text(cartTotal);

$('.qty_sub').on("click", event =>{
	var id = $(event.target).closest("div.product_quantity").attr("id");
	var quan = $(event.target).closest("div.product_quantity").find("span")[0].textContent;
	var price = parseInt($(event.target).closest("div.product_quantity").attr("price"));
	var oldTotal = parseInt($(event.target).closest('div.product_quantity_container').siblings('div.product_total')[0].textContent);
	if(oldTotal > price){
		var data = id
		$.ajax({
			type: 'POST',
			data: "dec="+data,
			url: '../controller/modifyCart.php',
			success:function(data){
				var newTotal = oldTotal - price;
				productTotal -=price;
				total.find("#totalProduct").text(productTotal);
				$(event.target).closest('div.product_quantity_container').siblings('div.product_total').text(newTotal);
				cartTotal = parseInt(shipTotal) + parseInt(productTotal);
				total.find('#totalCart').text(cartTotal);

			},
			error:function(data){
				$(event.target).closest("div.product_quantity").find(".product_text").text(quan);
				alert("Error")
			}
		});
	}
})

$('.qty_add').on("click", event =>{
	var id = $(event.target).closest("div.product_quantity").attr("id");
	var quan = $(event.target).closest("div.product_quantity").find("span")[0].textContent;
	var price = parseInt($(event.target).closest("div.product_quantity").attr("price"));
	var oldTotal = parseInt($(event.target).closest('div.product_quantity_container').siblings('div.product_total')[0].textContent);
	var data = id
	$.ajax({
		type: 'POST',
		data: "inc="+data,
		url: '../controller/modifyCart.php',
		success:function(data){
			var newTotal = oldTotal + price;
			productTotal +=price;
			total.find("#totalProduct").text(productTotal);
			$(event.target).closest('div.product_quantity_container').siblings('div.product_total').text(newTotal)
			cartTotal = parseInt(shipTotal) + parseInt(productTotal);
			total.find('#totalCart').text(cartTotal);
		
		},
		error:function(data){
			$(event.target).closest("div.product_quantity").find(".product_text").text(quan);
			alert("Error");
		}
	});
})


$('.fa-remove').on("click",event => {
	var data = $(event.target).closest("div.product_text").attr("id");
	var temptotal = parseInt($(event.target).closest("div.product_text").siblings("div.product_total").text());
	$.ajax({
		type: 'POST',
		data: "del="+data,
		url: '../controller/modifyCart.php',
		success:function(data){
			productTotal -=temptotal;
			total.find("#totalProduct").text(productTotal);
			cartTotal = parseInt(shipTotal) + parseInt(productTotal);
			total.find('#totalCart').text(cartTotal);
			var num = $(event.target).closest('li').find('div.product_number')[0].textContent;
			var li = $(event.target).closest('li').siblings();
			$.each(li, function(){
			var l = $(this);
			var i = l.find('div.product_number')[0].textContent;
			if(i>num){
				i = i-1;
				l.find('div.product_number').text(i);
			}
		})
		$(event.target).closest("li").remove();
		var cartItems = parseInt($(".cart a > div > div").text());
        $(".cart a > div > div").text(cartItems -1)
		},
		error:function(data){
			alert("Error");
		}
	});

})

$('.shipping_radio').on("change",event => {
	shipTotal = $("input[name='shipping_method']:checked").val();
	total.find('#totalShip').text(shipTotal);
	cartTotal = parseInt(shipTotal) + parseInt(productTotal);
	total.find('#totalCart').text(cartTotal);
})

$('.checkout_button').on('click', event=>{
  	localStorage['cartTotal'] = cartTotal;
  	localStorage['productTotal'] = productTotal;
  	localStorage['shipTotal'] = shipTotal;
})

$('#deleteCart').on('click', event=>{
	$.ajax({
		type: 'POST',
		data: "drop=1",
		url: '../controller/modifyCart.php',
		success:function(data){
			productTotal =0;
			total.find("#totalProduct").text(productTotal);
			cartTotal = parseInt(shipTotal) + parseInt(productTotal);
			total.find('#totalCart').text(cartTotal);
			var li = $("li#itemCartli");
			$.each(li, function(){
				$(this).remove();
			})
			$(".cart a > div > div").text(0)	
		},
		error:function(data){
			alert("Error");
		}
	});
	
	
})

</script>
<script>

</script>

</div>

<script src="../styles/bootstrap-4.1.2/popper.js"></script>
<script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/cart.js"></script>
</body>
</html>