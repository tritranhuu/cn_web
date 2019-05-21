<?php 
include("../database/connectDB.php");
include("../database/dbCart.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Đặt Hàng</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../styles/checkout.css">
<link rel="stylesheet" type="text/css" href="../styles/checkout_responsive.css">
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	
</head>

<?php include("header.php")?>


<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Đặt hàng</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Trang chủ</a></li>
							<li>Đặt hàng</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Checkout -->

		<div class="checkout">
			<div class="container">
				<div class="row">
					
					<!-- Billing -->
					<div class="col-lg-6">
						<div class="billing">
							<div class="checkout_title">Thông tin đơn hàng</div>
							<div class="checkout_form_container">
								<form action="#" id="checkout_form" class="checkout_form">
									<div>
										<!-- Company -->
										<input type="text" id="checkout_name" name="name" placeholder="Tên" class="checkout_input" required="required">
									</div>
									<div>
										<!-- Address -->
										<input type="text" id="checkout_address" name="address" class="checkout_input" placeholder="Địa chỉ" required="required">
									</div>
									
									<div>
										<!-- Phone no -->
										<input type="phone" id="checkout_phone" name="phone" class="checkout_input" placeholder="Số điện thoại" required="required">
									</div>
									<div>
										<!-- Email -->
										<input type="email" id="checkout_email" name="email" class="checkout_input" placeholder="Email" required="required">
									</div>
								</form>
							</div>
						</div>
					</div>

					<!-- Cart Total -->
					<div class="col-lg-6 cart_col">
						<div class="cart_total">
							<div class="cart_extra_content cart_extra_total">
								<div class="checkout_title">Tổng hóa đơn</div>
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
								<div class="payment_options">
									<div class="checkout_title">Phương thức thanh toán</div>
									<ul>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_1" name="payment_radio" class="payment_radio" value="momo">
												<span class="radio_mark"></span>
												<span class="radio_text">Momo</span>
											</label>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_2" name="payment_radio" class="payment_radio" value="credit">
												<span class="radio_mark"></span>
												<span class="radio_text">Chuyển khoản</span>
											</label>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_3" name="payment_radio" class="payment_radio" value="direct" checked>
												<span class="radio_mark"></span>
												<span class="radio_text">Trả khi nhận hàng</span>
											</label>
										</li>
									</ul>
								</div>
								<div class="cart_text">
									<p>Hãy kiểm tra đầy đủ lại thông tin và chỉ thanh toán khi bạn đã chắc chắn với các thông tin đó</p>
								</div>
								<div class="checkout_button trans_200" id="checkOut"><a href="#">Hoàn tất đơn hàng</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<script>
	
	var total = $('.cart_extra_total');
	total.find('#totalShip').text(localStorage['shipTotal']);
	total.find("#totalProduct").text(localStorage['productTotal']);
	total.find('#totalCart').text(localStorage['cartTotal']);
	var shipping;
	switch(localStorage['shipTotal']) {
  		case "30000":
    		shipping = "24h"
    		break;
  		case "10000":
    		shipping = "standard"
    		break;
  		case "0":
    		shipping = "taken"
    		break;
    	default:
    		shipping = "taken"
	}	

	$('#checkOut').on('click', event=>{
		if(total.find("#totalProduct").text()=='0'){
			swal({
    				title: "Thất bại",
    				text: "Bạn không có sản phẩm nào trong giỏ hàng",
    				type: "error"
				})
			return;
		}
		var data = {
			'addOrder'	: '1',
        	'name'  : $("input[name='name']").val(),
        	'address' : $("input[name='address']").val(),
        	'phone' : $("input[name='phone']").val(),
        	'email' : $("input[name='email']").val(),
        	'shipping' : shipping,
        	'payment' :  $("input[name='payment_radio']:checked").val(),
        	'message' : 'hello'
        };
        $.ajax({
            type        : 'POST', 
            url         : '../controller/modifyOrder.php', 
            data        : data, 
        	success:function(data){
        		if(data.replace(/^\s+|\s+$/g, '') == "noinfo"){
        			swal({
    						title: "Thất bại",
    						text: "Hãy nhập đủ thông tin",
    						type: "error"
							})
        		}
        		else if(data!==""){
        			str = "Số lượng sản phảm " + data + " bạn lựa chọn đã vượt quá trong kho"
        			swal({
    						title: "Thất bại",
    						text: str,
    						type: "error",
							})
        		}
        		else{
        			swal({
    						title: "Thành công",
    						text: "Bạn đã đặt hàng thành công",
    						type: "success"
							}).then(function() {
    							window.location.href = 'my_order.php';
							});	
        		}
        	},
        	error:function(data){
				alert("Error")
			}

        })
	})
</script>