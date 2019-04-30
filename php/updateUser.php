<?php
include("../database/connectDB.php");
include("../database/dbCart.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Thông tin cá nhân</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../styles/info.css">
<link rel="stylesheet" type="text/css" href="../styles/cart_responsive.css">
<script src="../js/jquery-3.2.1.min.js"></script>

<?php include('header.php'); ?>

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
				<div class="row cart_extra_row">
				<div class="col-lg-3 cart_extra_col">
						<div class="cart_extra cart_extra_2">
							
							<div class="shipping" val="0">
								<div class="list-group">
									<a class="list-group-item list-group-item-action list-group-item-light " id="info-button" style="cursor: pointer" href='info_user.php'>Thông tin tài khoản</a>
                                    <a class="list-group-item list-group-item-action list-group-item-light active " id="edit-button" style="cursor: pointer">Chỉnh sửa thông tin</a>
  									<a class="list-group-item list-group-item-action list-group-item-light" id="passwd-button" style="cursor: pointer" href='updatePass.php'>Đổi mật khẩu</a>
								</div>
						
						</div>
					</div>
					</div>
					<div class="col-lg-9 cart_extra_col" >
						<div class="cart_extra cart_extra_2">
							<div class="cart_extra_content cart_extra_total">
							<form action="processUser.php" method="post">
							<div class="acc-edit" style="position: relative; visibility: visible;">
								<div class="cart_extra_title">Chỉnh sửa thông tin</div><hr><br/>
								
									<div>
										<input type="text" id="checkout_name" name="username"  placeholder="Username"  class="checkout_input" required="required">
									</div>
									<div>
										<input type="text" id="checkout_name" name="name"  placeholder="Tên" class="checkout_input" required="required">
									</div>
									<div>
										<input type="text" id="checkout_address" name="address"  placeholder="Địa chỉ" class="checkout_input"  required="required">
									</div>
									<div>
										<input type="phone" id="checkout_phone" name="phone"  placeholder="Số điện thoại" class="checkout_input"  required="required">
									</div>
									<div>
										<select name="gender" id="checkout_province" class="dropdown_item_select checkout_input" require="required">
											<option value="" disabled selected>Giới tính</option>
											<option value="M">Nam</option>
											<option value="F">Nữ</option>
											<option value="O">Khác</option>
										</select>
									</div>
								</form>
								<div class="checkout_button trans_200 " ><button type="submit">Cập nhật</button></div>	
							</div>
						
							
						</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	<?php include("header.php"); ?>
<?php 
$connect->close();
?>