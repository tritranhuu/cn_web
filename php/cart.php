<?php include("../database/dbCart.php"); ?>
<!DOCTYPE html>
<html lang="en">
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
<form action="order.php" method="post">
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
		echo '<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start"><div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto"><div class="pro_num"><div class="product_number">'.($i+1).'</div></div>';
		printCartItem($items[$i]);
		echo '</li>';
	}
	
?>
									
								</ul>
							</div>
							<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
								<div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="button button_clear trans_200"><a href="categories.html">xóa giỏ hàng</a></div>
									<div class="button button_continue trans_200"><a href="categories.html">tiếp tục mua sắm</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row cart_extra_row">
					<div class="col-lg-6">
						<div class="cart_extra cart_extra_1">
						<div class="cart_extra_content cart_extra_coupon">
								<div class="cart_extra_title">Mã khuyến mãi</div>
								<div class="coupon_form_container">
									<form action="#" id="coupon_form" class="coupon_form">
										<input type="text" class="coupon_input" required="required">
										<button class="coupon_button">áp dụng</button>
									</form>
								</div>
								<div class="coupon_text">Nhập mã khuyến mãi để nhận được ưu đãi tốt nhất</div>
								<div class="shipping">
									<div class="cart_extra_title">Hình Thức Vận Chuyển</div>
									<ul>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_1" name="shipping_method" class="shipping_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Giao hàng 24h</span>
											</label>
											<div class="shipping_price ml-auto">30.000đ</div>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_2" name="shipping_method" class="shipping_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Giao hàng chuẩn</span>
											</label>
											<div class="shipping_price ml-auto">10.000đ</div>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_3" name="shipping_method" class="shipping_radio" checked>
												<span class="radio_mark"></span>
												<span class="radio_text">Đến nhận về</span>
											</label>
											<div class="shipping_price ml-auto">Miễn phí</div>
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
										<div class="cart_extra_total_value ml-auto" id="totalProduct">$29.90</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Vận chuyển</div>
										<div class="cart_extra_total_value ml-auto" id="totalShip">Miễn phí</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Tổng cộng</div>
										<div class="cart_extra_total_value ml-auto" id="totalCart">$29.90</div>
									</li>
								</ul>
								<button type="submit" name="submit">Thanh Toán</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</form>
<?php
    }
?>
                                            
<?php
    function printCartItem($item){
?>
											<div><div class="product_image"><img src="../<?php echo $item['url'];?>" alt=""></div></div>
											<div class="product_name_container">
												<div class="product_name"><a href="product.html"><?php echo $item['proName'];?></a></div>
												<div class="product_text"><?php echo $item['description'];?></div>
											</div>
										</div>
										<div class="product_color product_text"><span>Color: </span><?php echo $item['color'];?></div>
										<div class="product_size product_text"><span>Size: </span><?php echo $item['size'];?></div>
										<div class="product_price product_text"><?php echo (int)$item['price'];?></div>
										<div class="product_quantity_container">
											<div class="product_quantity ml-lg-auto mr-lg-auto text-center" price='<?php echo (int)$item['price'];?>' id='<?php echo $item['optID']?>'>
												<span class="product_text product_num"><?php echo $item['quantity'];?></span>
												<div class="qty_sub qty_button trans_200 text-center"><span>-</span></div>
												<div class="qty_add qty_button trans_200 text-center"><span>+</span></div>
											</div>
										</div>
										<div class="product_total product_text" tol='<?php echo ((int)$item['price']*(int)$item['quantity']);?>'><?php echo ((int)$item['price']*(int)$item['quantity']);?></div>
                                        <div class="product_text" id='<?php echo $item['optID']?>'><i class="fa fa-remove" style="font-size:32px;color:red"></i></div>
<?php
    }
?>


<?php
	$conn = connectDB();
    $items = getCartByAccId("1", $conn);
    printCart($items);
	include("footer.php");
?>

<script>

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
				$(event.target).closest('div.product_quantity_container').siblings('div.product_total').text(newTotal)
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
			$(event.target).closest('div.product_quantity_container').siblings('div.product_total').text(newTotal)
		},
		error:function(data){
			$(event.target).closest("div.product_quantity").find(".product_text").text(quan);
			alert("Error");
		}
	});
})


$('.fa-remove').on("click",event => {
	var data = $(event.target).closest("div.product_text").attr("id");
	alert(data)
	$.ajax({
		type: 'POST',
		data: "del="+data,
		url: '../controller/modifyCart.php',
		success:function(data){
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
		},
		error:function(data){
			alert("Error");
		}
	});
	

})
</script>