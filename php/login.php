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
					<h3>sign in</h3>
					<div class="form-wrapper">
						<input type="text" placeholder="Tên Đăng Nhập" class="form-control" name="username">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Mật khẩu" class="form-control" name="password">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button type="button" class="done">Đăng nhập
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
					<div style="padding-top:10px; text-align:center; "><a href="register.php" style="color:#333">Đăng kí tài khoản mới</a></div>
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

$('.done').on("click", event =>{
	var username = $('input[name=username]').val();
	var pass = $('input[name=password]').val();
	if(isEmptyOrSpaces(username)|isEmptyOrSpaces(pass)){
    	alert("Xin vui lòng nhập đủ thông tin");
	}
	else{
		var formData = {
			'login' : 'a',
        	'username' : username,
        	'pass' : pass,
        };
        $.ajax({
            type        : 'POST', 
            url         : '../controller/modifyAccount.php', 
            data        : formData, 
            dataType    : 'application/json', 
        	success:function(data){
        		alert("helo");
        	},
        	error:function(data){
				alert("Error")
			}

        })

	}
})
</script>