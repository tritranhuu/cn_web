<link rel="stylesheet" type="text/css" href="../styles/header.css">
<body>

<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="../images/search.png" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="../controller/controlcategory.php?type=F&page=1&filertype=false">Nữ</a></li>
			<li><a href="../controller/controlcategory.php?type=M&page=1&filertype=false">Nam</a></li>
			<li><a href="../controller/controlcategory.php?type=K&page=1&filertype=false">Trẻ em</a></li>
			<li><a href="#">Liên hệ</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="../images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>(+84)12345678</div>
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
				<a href="./">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="../images/logo_1.png" alt=""></div>
						<div>BKStyle</div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="../controller/controlcategory.php?type=F&page=1&filertype=false">Nữ</a></li>
					<li><a href="../controller/controlcategory.php?type=M&page=1&filertype=false">Nam</a></li>
					<li><a href="../controller/controlcategory.php?type=K&page=1&filertype=false">Trẻ em</a></li>
					<li><a href="#">Liên hệ</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
					<form action="search.php" id="header_search_form">
						<input type="text" class="search_input" name="search" placeholder="Tìm kiếm" required="required">
						<button class="header_search_button"><img src="../images/search.png" alt=""></button>
					</form>
				</div>
				
				
<?php
	session_start();
	if(isset($_SESSION['admin'])){
?>
	<!-- User -->
				<div class="user dropdown" ><a class="">
					<div><img src="../images/user.svg"><div>&#10004;</div></div>
					<div class="account-form dropdown-content">
  					<div class="form-account">
      						
      						<p>Xin chào<?php echo " ".$_SESSION['name']?></p>
      						<p class="message"><a href="#"></a></p>
      						<button onclick="location.href='./admin/';">Quản lý</button>
      						<button onclick="location.href='info_user.php';">Thông tin</button>
      						<button onclick="location.href='my_order.php';">Đơn hàng</button>
      						<button id="logout">Đăng xuất</button>
    				<script type="text/javascript">
    					$("#logout").on("click", event=>{
        					$.ajax({
            					type        : 'POST', 
            					url         : '../controller/logoutHandle.php', 
            					data        : "logout=1",
        						success:function(data){
        							window.location.href = 'index.php';				
        						},
        						error:function(data){
									swal("Lỗi hệ thống, vui lòng thử lại sau");
								}
        					})
    					})
    				</script>
  					</div>
					</div>
				</a></div>
				<!-- Cart -->
				<div class="cart"><a href="cart.php"><div><img class="svg" src="../images/cart.svg"><div><?php echo getCartItemNum($_SESSION['accID']);?></div></div></a></div>	
<?php
	}
	else if(isset($_SESSION['accID'])){
?>
	<!-- User -->
				<div class="user dropdown" ><a class="">
					<div><img src="../images/user.svg"><div>&#10004;</div></div>
					<div class="account-form dropdown-content">
  					<div class="form-account">
      						
      						<p>Xin chào<?php echo " ".$_SESSION['name']?></p>
      						<p class="message"><a href="#"></a></p>
      						<button onclick="location.href='info_user.php';">Thông tin</button>
      						<button onclick="location.href='my_order.php';">Đơn hàng</button>
      						<button id="logout">Đăng xuất</button>
    				<script type="text/javascript">
    					$("#logout").on("click", event=>{
        					$.ajax({
            					type        : 'POST', 
            					url         : '../controller/logoutHandle.php', 
            					data        : "logout=1",
        						success:function(data){
        							window.location.href = 'index.php';				
        						},
        						error:function(data){
									swal("Lỗi hệ thống, vui lòng thử lại sau");
								}
        					})
    					})
    				</script>
  					</div>
					</div>
				</a></div>
				<!-- Cart -->
				<div class="cart"><a href="cart.php"><div><img class="svg" src="../images/cart.svg"><div><?php echo getCartItemNum($_SESSION['accID']);?></div></div></a></div>

<?php		
	}
	else{
		echo $_SESSION['accID'];
?>
	<!-- User -->
				<div class="user dropdown" ><a class="">
					<div><img src="../images/user.svg"></div>
					<div class="account-form dropdown-content">
  					<div class="form-account">
      						<p>Đã có tài khoản?</p>
      						<button onclick="location.href='login.php';">Đăng nhập</button>
      						<p class="message"><a href="#">Quên mật khẩu?</a></p>
      						<hr>
      						<p>Chưa có tài khoản?</p>
      						<button onclick="location.href='register.php';">Đăng ký</button>
    				
  					</div>
					</div>
				</a></div>
			
<?php
	}
?>				
				
				
				<!-- Phone -->
				<div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div><div><img src="../images/phone.svg"></div></div>
					<div>(+84)12345678</div>
				</div>
				
				
			</div>
		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>