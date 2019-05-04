<?php 
include("./controller/controllerAdd.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Quản lí đơn hàng</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/panel.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />


    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <link rel="stylesheet" type="text/css" href="css/fileinput.css">

    <script src="js/jquery.js"></script>
    <script src="bs3/js/bootstrap.min.js"></script>
</head>

<body>

<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
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
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            	<img alt="" src="images/avatar1_small.jpg">
                <span class="username">Trần Hữu Trí</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
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
                <a href="index.html">
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
                    <li><a href="order_data.php">Đơn hàng</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Hàng hóa</span>
                </a>
                <ul class="sub">
                    <li><a href="add_vendor.php">Thêm nhà phân phối</a></li>
                    <li><a href="add_product.php">Thêm sản phẩm</a></li>
                    <li><a href="edit_product.php" class="active">Chỉnh sửa sản phẩm</a></li>
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

<?php
if(!isset($_GET['proID'])){
?>
	<!--main content start-->
    <section id="main-content" class="">
        <section class="wrapper">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Chỉnh sửa mặt hàng
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            <form>
                                <div class="form-group">
                                    <label for="proID">Nhập mã mặt hàng</label>
                                    <input type="text" class="form-control" id="proID" name="proID">
                                </div>
                            <button type="submit" class="btn btn-info" id="addProduct">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>


                                
</div></div></section></section></section>
<?php
}
else{
?>
<!--main content start-->
    <section id="main-content" class="">
        <section class="wrapper">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Chỉnh sửa mặt hàng
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                
                                <div class="form-group">
                                    <label for="proName">Tên mặt hàng</label>
                                    <input type="text" class="form-control" id="proName" name="proName">
                                </div>
<?php printCompanyList();?>                    
                                <div class="form-group">
                                    <label for="type">Loại</label>
                                    <input type="text" class="form-control" id="type" name="type">
                                </div>
                                <div class="form-group">
                                    <label for="material">Vật liệu</label>
                                    <input type="text" class="form-control" id="material" name="material">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Loại</label>
                                        <select class="form-control m-bot15" id="gender" name="gender">
                                            <option value="M">Nam</option>
                                            <option value="F">Nữ</option>
                                            <option value="K">Trẻ Em</option>
                                        </select>
                                </div>                                
                    
                                <div class="form-group">
                                    <label for="import-price">Giá nhập</label>
                                    <input type="number" class="form-control" id="import-price" name="import_price">
                                </div>

                                <div class="form-group">
                                    <label for="price">Giá bán</label>
                                    <input type="number" class="form-control" id="price" name="price">
                                </div>

                                <div class="form-group">
                                <label for="description">Mô tả</label>
                                    <textarea class="form-control" rows="6" id="description" name="description"></textarea>
                                </div>                                
                                
                                
                        
                            <button class="btn btn-info" id="addProduct">Submit</button>
                            </div>

                        </div>
                    </section>


                                
</div></div></section></section>

<section id="main-content" class="">
        <section class="wrapper">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Chỉnh sửa ảnh
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                
                                <div class="form-group">
                <label for="img">Ảnh sản phẩm</label>
                <span class="btn btn-default btn-file">
                        <input id="img" name="img[]" type="file" class="file" multiple data-show-upload="true" data-show-caption="true">
                </span>
            </div>  
            <button class="btn btn-info" id="addImage">Submit</button>
                            </div>

                        </div>
                    </section>


                                
</div></div></section></section>

</section>
<?php
}
?>

<script src="./js/fileinput.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>