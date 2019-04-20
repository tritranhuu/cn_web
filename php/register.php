<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Đăng ký</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Little Closet template">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
		<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../plugins/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="../styles/sign_up.css">
		<link rel="stylesheet" href="../styles/responsive.css">
		<script src="../js/jquery-3.2.1.min.js"></script>	
	</head>
<?php include("header.php");?>
	<body>

		<div class="wrapper" style="background-image: url('../images/sign_up/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="../images/sign_up/registration-form-1.jpg" alt="">
				</div>
				<form>
					<h3>sign up</h3>
					<div class="form-group">
						<input type="text" placeholder="Họ và Đệm" class="form-control" name="lname">
						<input type="text" placeholder="Tên" class="form-control" name="fname">
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Tên Đăng Nhập" class="form-control" name="username">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Địa Chỉ Email" class="form-control" name="email">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="" id="" class="form-control" style="color:#333; font-size:13px" name="gender">
							<option value="" disabled selected>Giới tính</option>
							<option value="M">Nam</option>
							<option value="F">Nữ</option>
							<option value="O">Khác</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Mật khẩu" class="form-control" name="password">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Xác Thực Mật Khẩu" class="form-control" name="password_con">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button type="button" class="done">Đăng kí
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
					<div style="padding-top:10px; text-align:center; "><a href="login.php" style="color:#333">Đăng nhập vào tài khoản đã có</a></div>
				</form>
				
				
			</div>
		</div>
		
	</body>
</html>

<?php

?>

<script type="text/javascript">

function isEmptyOrSpaces(str){
    return str === null || str.match(/^ *$/) !== null;
}

$('.alo').on("click", event =>{
	var name = $('input[name=lname]').val() + ' ' + $('input[name=fname]').val();
	var username = $('input[name=username]').val();
	var email = $('input[name=email]').val();
	var gender = $('select[name=gender]').val();
	var pass1 = $('input[name=password]').val();
	var pass2 = $('input[name=password_con]').val();
	if(pass1===pass2){
		if(isEmptyOrSpaces(name)|isEmptyOrSpaces(username)|isEmptyOrSpaces(email)|isEmptyOrSpaces(pass1)){
    		alert("Xin vui lòng nhập đủ thông tin");
		}
		else{
			var formData = {
				'create' : 'new',
            	'name' : name,
            	'username' : username,
            	'email' : email,
            	'pass' : pass1,
            	'gender' : gender
        	};
        	$.ajax({
            	type        : 'POST', 
            	url         : '../controller/modifyAccount.php', 
            	data        : formData, 
            	dataType    : 'application/json', 
            	encode      : true,
        		success 	:function(data){
        			alert("Đăng ký thành công");
        		},
        		error		:function(data){
	        		alert("Đã có lỗi, xin vui lòng thử lại");
        		}

        	})

		}	
	}
	
})

</script>