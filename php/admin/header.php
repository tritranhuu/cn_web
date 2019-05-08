<?php
session_start();
if (!isset($_SESSION['admin']))
{
    header('Location: ../index.php');
}
?>
<?php
include("./model/getInfoFromDb.php");
?>

<body>

<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="../index.php" class="logo">
        <img src="images/logo.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li>
            <a href="#">
            	<img alt="" src="images/admin.png">
                <span class="username"><?php echo getNameById($_SESSION['accID']);?></span>
                <b class="caret"></b>
            </a>
        </li>
        <!-- user login dropdown end -->

    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->

<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->            <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="index.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Thống kê</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-th"></i>
                    <span>Dữ liệu</span>
                </a>
                <ul class="sub">
                    <li><a href="account_data.php">Tài khoản</a></li>
                    <li><a href="product_data.php">Sản phẩm</a></li>
                    <li><a href="order_data.php" id="order_data.php">Đơn hàng</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Hàng hóa</span>
                </a>
                <ul class="sub">
                    <li><a href="add_vendor.php" class="active">Thêm nhà phân phối</a></li>
                    <li><a href="add_product.php">Thêm sản phẩm</a></li>
                    <li><a href="edit_product.php">Chỉnh sửa sản phẩm</a></li>
                    <li><a href="import_product.php">Nhập kho</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-users"></i>
                    <span>Tài khoản</span>
                </a>
                <ul class="sub">
                    <li><a href="add_account.php">Thêm tài khoản</a></li>
                    <li><a href="edit_account.php">Chỉnh sửa tài khoản</a></li>
                </ul>
            </li>
        </ul></div>        
<!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<script type="text/javascript">
    var page = window.location.pathname.split("/").pop()
    var element = $(`a[href='${page}']`)
    element.attr("class", "active")
</script>