<?php
	if(isset($_POST["submit"])){
		echo "hello";
	}
?>

<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Thanh toán</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Trang chủ</a></li>
							<li>Thanh toán</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Checkout -->
<form action="complete_order.php" method="post">
		<div class="checkout">
			<div class="container">
				<div class="row">
					
					<!-- Billing -->
					<div class="col-lg-6">
						<div class="billing">
							<div class="checkout_title">Xin mời nhập thông tin vào hóa đơn</div>
							<div class="checkout_form_container">
								<!-- <form action="#" id="checkout_form" class="checkout_form"> -->
									<div class="row">
										<div class="col-lg-6">
											<!-- Name -->
											<input type="text" id="checkout_surname" class="checkout_input" placeholder="Họ và Đệm" required="required">
										</div>
										<div class="col-lg-6">
											<!-- Last Name -->
											<input type="text" id="checkout_name" class="checkout_input" placeholder="Tên" required="required">
										</div>
									</div>
									<div>
										<!-- Address -->
										<input type="text" id="checkout_address" class="checkout_input" placeholder="Địa chỉ" required="required">
										<input type="text" id="checkout_address_2" class="checkout_input checkout_address_2" placeholder="Địa chỉ dự phòng (tùy chọn)">
									</div>
									<div>
										<!-- Phone no -->
										<input type="phone" id="checkout_phone" class="checkout_input" placeholder="Số điện thoại" required="required">
									</div>
									<div>
										<!-- Email -->
										<input type="phone" id="checkout_email" class="checkout_input" placeholder="Địa chỉ Email" required="required">
									</div>
								<!-- </form> -->
							</div>
						</div>
                    </div>
                    <!-- Cart Total -->
					<div class="col-lg-6 cart_col">
						<div class="cart_total">
							<div class="cart_extra_content cart_extra_total">
								<div class="checkout_title">Cart Total</div>
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Subtotal</div>
										<div class="cart_extra_total_value ml-auto">$29.90</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Shipping</div>
										<div class="cart_extra_total_value ml-auto">Free</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto">$29.90</div>
									</li>
								</ul>
								<div class="payment_options">
									<div class="checkout_title">Payment</div>
									<ul>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_1" name="payment_radio" class="payment_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Paypal</span>
											</label>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_2" name="payment_radio" class="payment_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Cash on Delivery</span>
											</label>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_3" name="payment_radio" class="payment_radio" checked>
												<span class="radio_mark"></span>
												<span class="radio_text">Credit Card</span>
											</label>
										</li>
									</ul>
								</div>
								<button type="submit" name="submit_order" class="checkout_button trans_200">place order</button>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
</form>