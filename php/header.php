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
			<li><a href="#">Nữ</a></li>
			<li><a href="#">Nam</a></li>
			<li><a href="#">Trẻ em</a></li>
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
				<a href="#">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="../images/logo_1.png" alt=""></div>
						<div>Little Closet</div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li class="active"><a href="#">Nữ</a></li>
					<li><a href="#">Nam</a></li>
					<li><a href="#">Trẻ em</a></li>
					<li><a href="#">Liên hệ</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Tìm kiếm" required="required">
						<button class="header_search_button"><img src="../images/search.png" alt=""></button>
					</form>
				</div>
				
				
				<!-- Cart -->
				<div class="cart"><a href="cart.php"><div><img class="svg" src="../images/cart.svg"><div><?php echo getCartItemNum('1');?></div></div></a></div>
				<!-- User -->
				<div class="user dropdown" ><a class="">
					<div><img src="../images/user.svg"></div>
					<div class="account-form dropdown-content">
  					<div class="form-account">
    					</form>
    						<form class="">
      							<p>Đã có tài khoản?</p>
      							<button>Đăng nhập</button>
      							<p class="message"><a href="#">Quên mật khẩu?</a></p>
      							<hr>
      							<p>Chưa có tài khoản?</p>
      							<button>Đăng ký</button>
    					</form>
  					</div>
					</div>
				</a></div>
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