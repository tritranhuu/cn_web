<?php
include("../database/connectDB.php");
include("../database/dbCart.php"); 
$conn = connectDB();
$sql    = "SELECT * FROM account WHERE accID='1'";
$ket_qua = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($ket_qua);

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
									<a class="list-group-item list-group-item-action list-group-item-light active" id="info-button" style="cursor: pointer">Thông tin tài khoản</a>
  									<a class="list-group-item list-group-item-action list-group-item-light" id="edit-button" style="cursor: pointer" href='updateUser.php'>Chỉnh sửa thông tin</a>
  									<a class="list-group-item list-group-item-action list-group-item-light" id="passwd-button" style="cursor: pointer" href='updatePass.php'>Đổi mật khẩu</a>
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
										<div class="cart_extra_total_value ml-auto"><?php  echo  $row['name'] ; ?></div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Username</div>
										<div class="cart_extra_total_value ml-auto"><?php  echo  $row['username'] ; ?></div>
									</li>
								</ul>
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



