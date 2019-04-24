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
									<a class="list-group-item list-group-item-action list-group-item-light active" id="info-button" style="cursor: pointer">Thông tin tài khoản</a>
  									<a class="list-group-item list-group-item-action list-group-item-light" id="edit-button" style="cursor: pointer">Chỉnh sửa thông tin</a>
  									<a class="list-group-item list-group-item-action list-group-item-light" id="passwd-button" style="cursor: pointer">Đổi mật khẩu</a>
								</div>
						
						</div>
					</div>
					</div>
					<div class="col-lg-9 cart_extra_col">
						<div class="cart_extra cart_extra_2">
							<div class="cart_extra_content cart_extra_total">
							<div class="acc-info" style="position: relative; visibility: visible;">
								<div class="cart_extra_title" >Thông tin tài khoản<hr></div>
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Tên</div>
										<div class="cart_extra_total_value ml-auto">Trần Hữu Trí</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Username</div>
										<div class="cart_extra_total_value ml-auto">tritranhuu</div>
									</li>
								</ul>
							</div>
							<div class="acc-edit" style="position: absolute; visibility: hidden;">
								<div class="cart_extra_title">Chỉnh sửa thông tin</div><hr><br/>
								<form action="#" id="checkout_form" class="checkout_form">
									<div>
										<input type="text" id="checkout_name" name="name" placeholder="Tên" class="checkout_input" required="required">
									</div>
									<div>
										<input type="text" id="checkout_address" name="address" class="checkout_input" placeholder="Địa chỉ" required="required">
									</div>
									<div>
										<input type="phone" id="checkout_phone" name="phone" class="checkout_input" placeholder="Số điện thoại" required="required">
									</div>
									<div>
										<select name="checkout_province" id="checkout_province" class="dropdown_item_select checkout_input" require="required">
											<option value="" disabled selected>Giới tính</option>
											<option value="M">Nam</option>
											<option value="F">Nữ</option>
											<option value="O">Khác</option>
										</select>
									</div>
								</form>
								<div class="checkout_button trans_200" name="update"><a href="info_user.php">Cập nhật</a></div>	
							</div>
							<div class="acc-pass" style="position: absolute; visibility: hidden;">
								<div class="cart_extra_title">Đổi mật khẩu</div><hr><br/>
								<form action="#" id="checkout_form" class="checkout_form">
									<div>
										<input type="password" id="checkout_name" name="oldpass" placeholder="Mật khẩu cũ" class="checkout_input" required="required">
									</div>
									<div>
										<input type="password" id="checkout_address" name="newpass1" class="checkout_input" placeholder="Mật khẩu mới" required="required">
									</div>
									<div>
										<input type="password" id="checkout_address" name="newpass2" class="checkout_input" placeholder="Nhập lại mật khẩu mới" required="required">
									</div>
								</form>
								<div class="checkout_button trans_200" name="update"><a href="info_user.php">Cập nhật</a></div>	
							</div>
						</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	<?php include("header.php"); ?>
 
<?php
	
?>

<script type="text/javascript">

function isEmptyOrSpaces(str){
    return str === null || str.match(/^ *$/) !== null;
}

$('.alo').on("click", event =>{
	var name = $('input[name=lname]').val() + ' ' + $('input[name=fname]').val();
	var username = $('input[name=username]').val();
	var address = $('input[name=address]').val();
	var phone = $('select[name=phone]').val();
	var pass = $('input[name=password]').val();
	var pass1 = $('input[name=new_password]').val();
	var pass2 = $('input[name=confirm_password]').val();
	if(pass1===pass2){
		if(isEmptyOrSpaces(name)|isEmptyOrSpaces(username)|isEmptyOrSpaces(email)|isEmptyOrSpaces(pass1)){
    		alert("Vui lòng nhập đầy đủ thông tin");
		}
		else{
			var formData = {
				'update' : 'update',
            	'name' : name,
            	'username' : username,
            	'address' : address,
            	'pass' : pass1,
            	'phone' : phone,
        	};
        	$.ajax({
            	type        : 'POST', 
            	url         : '../controller/modifyAccount.php', 
            	data        : formData, 
            	dataType    : 'application/json', 
            	encode      : true,
        		success 	:function(data){
        			alert("Bạn đã cập nhật thông tin thành công");
        		},
        		error		:function(data){
	        		alert("Đã có lỗi, xin vui lòng thử lại");
        		}

        	})

		}	
	}
	
})


$("#info-button").on("click", event =>{
	$(".acc-info").attr("style", "position: relative; visibility: visible;")
	$('.acc-edit').attr("style", "position: absolute; visibility: hidden;")
	$('.acc-pass').attr("style", "position: absolute; visibility: hidden;")
	$('#info-button').attr("class", "list-group-item list-group-item-action list-group-item-light active")
	$('#edit-button').attr("class", "list-group-item list-group-item-action list-group-item-light")
	$('#passwd-button').attr("class", "list-group-item list-group-item-action list-group-item-light")

})

$('#edit-button').on("click", event =>{
	$('.acc-info').attr("style", "position: absolute; visibility: hidden;")
	$('.acc-edit').attr("style", "position: relative; visibility: visible;")
	$('.acc-pass').attr("style", "position: absolute; visibility: hidden;")
	$('#info-button').attr("class", "list-group-item list-group-item-action list-group-item-light")
	$('#edit-button').attr("class", "list-group-item list-group-item-action list-group-item-light active")
	$('#passwd-button').attr("class", "list-group-item list-group-item-action list-group-item-light")

})

$('#passwd-button').on("click", event =>{
	$('.acc-info').attr("style", "position: absolute; visibility: hidden;")
	$('.acc-edit').attr("style", "position: absolute; visibility: hidden;")
	$('.acc-pass').attr("style", "position: relative; visibility: visible;")
	$('#info-button').attr("class", "list-group-item list-group-item-action list-group-item-light")
	$('#edit-button').attr("class", "list-group-item list-group-item-action list-group-item-light")
	$('#passwd-button').attr("class", "list-group-item list-group-item-action list-group-item-light active")

})

</script>
