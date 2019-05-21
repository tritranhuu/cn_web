<?php
session_start();
if (!isset($_SESSION['accID']))
{
    header('Location: index.php');
}
else{
	$accID = $_SESSION['accID'];
}
?>

<?php 
include("../database/connectDB.php");
include("../database/dbAccount.php");
include("../database/dbCart.php");
$account = getInfoByAccID($accID);
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../styles/info.css">
<link rel="stylesheet" type="text/css" href="../styles/cart_responsive.css">
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	


<?php include('header.php');?>

	<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Thông tin tài khoản</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="./">Trang chủ</a></li>
							<li>Quản lí tài khoản</li>
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
										<div class="cart_extra_total_title">Tên đăng nhập</div>
										<div class="cart_extra_total_value ml-auto"><?php echo $account['username'];?></div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Họ và Tên</div>
										<div class="cart_extra_total_value ml-auto"><?php echo $account['name'];?></div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Email</div>
										<div class="cart_extra_total_value ml-auto"><?php echo $account['email'];?></div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Địa chỉ</div>
										<div class="cart_extra_total_value ml-auto"><?php echo $account['address'];?></div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Số điện thoại</div>
										<div class="cart_extra_total_value ml-auto"><?php echo $account['phone'];?></div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Giới tính</div>
										<div class="cart_extra_total_value ml-auto"><?php echo $account['gender'];?></div>
									</li>

								</ul>
							</div>
							<div class="acc-edit" style="position: absolute; visibility: hidden;">
								<div class="cart_extra_title">Chỉnh sửa thông tin</div><hr><br/>
								<form action="#" id="checkout_form" class="checkout_form">
									<div>
										<input type="text" id="name" name="name" placeholder="Tên" class="checkout_input" required="required" value="<?php echo $account['name'];?>">
									</div>
									<div>
										<input type="text" id="address" name="address" class="checkout_input" placeholder="Địa chỉ" required="required" value="<?php echo $account['address'];?>">
									</div>
									<div>
										<input type="phone" id="phone" name="phone" class="checkout_input" placeholder="Số điện thoại" required="required" value="<?php echo $account['phone'];?>">
									</div>
									<div>
										<select name="gender" id="gender" class="dropdown_item_select checkout_input" require="required">
											<option value="" disabled selected>Giới tính</option>
											<option value="M">Nam</option>
											<option value="F">Nữ</option>
											<option value="O">Khác</option>
										</select>
									</div>
								</form>
								<div class="checkout_button trans_200" name="update" id="update"><a style="color: white; cursor: pointer">Cập nhật</a></div>	
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
								<div class="checkout_button trans_200" name="passwd" id="passwd"><a style="color: white; cursor: pointer">Cập nhật</a></div>	
							</div>
						</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	<?php include("header.php"); ?>
 
<?php require("footer.php");?>

<script type="text/javascript">


$('#update').on("click", event =>{
	var name = $('input[name=name]').val()
	var address = $('input[name=address]').val();
	var phone = $('input[name=phone]').val();
	var gender = $('select[name=gender]').val();
			var formData = {
				'update' : 1, 
            	'name' : name,
            	'address' : address,
            	'phone' : phone,
            	'gender' : gender
        	};
        	$.ajax({
            	type        : 'POST', 
            	url         : '../controller/modifyAccount.php', 
            	data        : formData, 
        		success 	:function(data){
        			swal({
    						title: "Thành công",
    						text: "Bạn đã cập nhật thông tin thành công",
    						type: "success"
							}).then(function() {
    							window.location.href = 'info_user.php';
							});
        		},
        		error		:function(data){
	        		swal("Đã có lỗi, xin vui lòng thử lại");
        		}

        	})

		})

$('#passwd').on("click", event =>{
	var oldpass = $('input[name=oldpass]').val()
	var newpass1 = $('input[name=newpass1]').val();
	var newpass2 = $('input[name=newpass2]').val();
	if(newpass1 != newpass2){
		swal("Xác nhận mật khẩu sai");
		$('input[name=newpass1]').val("");
		$('input[name=newpass2]').val("");
		return 0;
	}

	var formData = {
				'updatePasswd' : 1, 
            	'oldpass' : oldpass,
            	'newpass' : newpass1,
        	};
        	$.ajax({
            	type        : 'POST', 
            	url         : '../controller/modifyAccount.php', 
            	data        : formData, 
        		success 	:function(data){
        			if(data.replace(/^\s+|\s+$/g, '') == "wrongpass"){
        				swal("Mật khẩu bạn nhập không chính xác")
        				$('input[name=oldpass]').val("");
        				$('input[name=newpass1]').val("");
						$('input[name=newpass2]').val("");
        			}
        			else{
        				swal({
    						title: "Thành công",
    						text: "Bạn đã đổi mật khẩu",
    						type: "success"
							}).then(function() {
    							window.location.href = 'info_user.php';
							});	
        			}
        			
        		},
        		error		:function(data){
	        		swal("Đã có lỗi, xin vui lòng thử lại");
        		}

        	})

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
