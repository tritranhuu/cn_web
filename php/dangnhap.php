<!DOCTYPE html>
<html lang="en">
<head>
<title>Đăng Nhập-Little Closet</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
<script type="text/javascript">

            function toidangky() {
               window.location="dangky.php";
            }
            function nhaptaikhoan() {
               var text = document.getElementById("tendangnhap").value;
			   if(text.length<8){
				   document.getElementById("output").innerHTML = "Độ dài tài khoản không thể nhỏ hơn 8";
			   }
			   else {
					document.getElementById("output").innerHTML = "";
			   }
            }
            function nhapid(){
                var text = document.getElementById("inputCateogry_ID").value;
                if(text.length){
                    document.getElementById("output").innerHTML = "ID có độ dài tối đa là  8 kí tự" ;
                    alter("ID có độ dài tối đa là  8 kí tự");
                }
            }
      </script>
</head>
<body>

<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="images/search.png" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="#">Nữ</a></li>
			<li><a href="#">Nam</a></li>
			<li><a href="#">Trẻ Em</a></li>
			<li><a href="#">Đồ Ở Nhà</a></li>
			<li><a href="#">Liên Hệ</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>+84321666888</div>
		</div>
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>


<div class="super_container">

    <!-- Header -->
    

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="#">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/logo_1.png" alt=""></div>
						<div>Little Closet</div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li class="active"><a href="#">Nữ</a></li>
					<li><a href="#">Nam</a></li>
					<li><a href="#">Trẻ Em</a></li>
					<li><a href="#">Trang Chủ</a></li>
					<li><a href="#">Liên Hệ</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Search Item" required="required">
						<button class="header_search_button"><img src="images/search.png" alt=""></button>
					</form>
				</div>
				<!-- User -->
				<div class="user"><a href="#"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
				<!-- Cart -->
				<div class="cart"><a href="cart.html"><div><img class="svg" src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				<!-- Phone -->
				<div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
					<div>+84321666888</div>
				</div>
			</div>
		</div>
	</header>
	<br/><br/><br/><br/>
	
    <form method ="POST">    <br/><br/><br/><br/>
	<div class="super_container_inner">
		<div class="super_overlay"></div>
		<!-- Footer -->

		<footer class="footer">
			<div class="footer_content">
				<div class="container">
					<div class="row">
						
						<!-- About -->
						<div class="col-lg-4 footer_col">
							<div class="footer_about">
								<div class="footer_logo">
									<a href="#">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<div class="footer_logo_icon"><img src="images/logo_2.png" alt=""></div>
											<div>Little Closet</div>
										</div>
									</a>		
								</div>
								<div class="footer_about_text">
									<p>Cửa hàng phân phối quần áo tới mọi nhà, mọi đối tương.</p>
								</div>
							</div>
						</div>

						<!-- Footer Links -->
						<div class="col-lg-4 footer_col">
							<div class="footer_menu">
								<div class="footer_title">Hỗ Trợ</div>
								<ul class="footer_list">
									<li>
										<a href="#"><div>Dịch Vụ Khách Hàng<div class="footer_tag_1">Online Now</div></div></a>
									</li>
									<li>
										<a href="#"><div>Chính Sách Hoàn Trả</div></a>
									</li>
									<li>
										<a href="#"><div>Hướng Dẫn Chọn Size<div class="footer_tag_2">Khuyến Cáo</div></div></a>
									</li>
									<li>
										<a href="#"><div>Điều Khoản Và Điều Kiện</div></a>
									</li>
									<li>
										<a href="#"><div>Liên Hệ</div></a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Footer Contact -->
						<div class="col-lg-4 footer_col">
							<div class="footer_contact">
								<div class="footer_title">Giữ Liên Lạc</div>
								<div class="newsletter">
									<form action="#" id="newsletter_form" class="newsletter_form">
										<input type="email" class="newsletter_input" placeholder="Subscribe to our Newsletter" required="required">
										<button class="newsletter_button">+</button>
									</form>
								</div>
								<div class="footer_social">
									<div class="footer_title">Mang Xã Hội</div>
									<ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
								<div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
								<nav class="footer_nav ml-md-auto order-md-2 order-1">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="category.html">Nữ</a></li>
										<li><a href="category.html">Nam</a></li>
										<li><a href="category.html">Trẻ Em</a></li>
										<li><a href="category.html">Đồ Ở Nhà</a></li>
										<li><a href="#">Liên Hệ</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
    <div class="container text-dark">
            <h2 >Đăng Ký Tài Khoản</h4>
		   <h5>Đăng ký để Little Closet có thể phục vụ bạn tốt hơn thông qua các chương trình chăm sóc khánh hàng và các khuyến mại đặc biệt dành riêng cho khách hàng mua online</h5>
           <div class ="border"></div>
           <br/>
        <div class="card-group">
            <div class="card">
                <div class="card-body font-weight-bold">
                    <h3 class="card-title">Đã có tài khoản?</h3>
                    <div class="form-group col-lg-7">
                    <label for="">Tên Đăng Nhập *:</label>
                    <input type ="text" class="form-control col-lg-12" name="tendangnhap" id="tendangnhap" rows="1" onchange ="nhaptaikhoan();"/>
                    <p id = "output" class = "text-danger ml-1"><p>
					</div>
                    <div class="form-group col-lg-7">
                    <label for="">Mật Khẩu *:</label>
                    <input type ="password" class="form-control col-lg-12" name="matkhau" id="matkhau" rows="1" onchange = "nhapmatkhau()"/>
                    </div>
                    <div class = "container col-lg-12">
                    <input type="submit" class="btn btn-danger pl-5 pr-5 pt-2 pb-2 text-center" name ="dangnhap" id="dangnhap" value="Đăng Nhập"/>
                    </div>
                    <a class="btn btn-default text-dark" href="#" role="button">Quên mật khẩu?</a>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <div class = "container col-lg-12">
                    <h3 class="card-title">Khác Hàng Mới ?</h3>
                    <button type="button" class="btn btn-danger  pl-5 pr-5 pt-2 pb-2 text-center" name="dangky" id ="dangky" onClick ="toidangky();"><i class="fa fa-user" aria-hidden="true"></i></i> Đăng Ký</button>
					</div>
                </div>
            </div>
        </div>
    </div>
	<?php
	$arr= array();
	$hostname = 'localhost:3306';
	$username = 'root';
	$password = '12345';
	$dbname = "qlbh";
	
	$conn = mysqli_connect($hostname, $username, $password,$dbname);
	if (!$conn) {
		die('Không thể kết nối: ' );
		exit();
	}
	if(isset($_POST['dangnhap'])){
		mysqli_set_charset($conn,"utf8");    
		$user = $_POST['tendangnhap'];
        $query ="Select password,count(username) as dem from account where username='". $user . "'";
    	$sql = mysqli_query($conn,$query);
        $i=0;
        while($result = mysqli_fetch_array($sql)){
			if($result['dem']==0){
				echo '<script type="text/javascript">
                window.onload = function () { alert("Tên đăng nhập chưa tồn tài"); }
                </script>';
			}
			else if($_POST['matkhau']==$result['password']){
				
                echo '<script type="text/javascript">
                window.onload = function () { alert("Thành Công"); }
                </script>';
			}
			else {
				
                echo '<script type="text/javascript">
                window.onload = function () { alert("Vui lòng kiểm tra lại mật khẩu"); }
                </script>';
			}
		}
	}
	
	?>
</form >
<?php include("footer.php");?>