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
                <a href="javascript:;" class="active">
                    <i class="fa fa-th"></i>
                    <span>Dữ liệu</span>
                </a>
                <ul class="sub">
                    <li><a href="#">Tài khoản</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li class="active"><a href="#">Đơn hàng</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Quản lí</span>
                </a>
                <ul class="sub">
                    <li><a href="form_component.html">Tài khoản</a></li>
                    <li><a href="advanced_form.html">Sản phẩm</a></li>
                    <li><a href="form_wizard.html">Kho</a></li>
                    <li><a href="form_validation.html">Đơn hàng</a></li>
                </ul>
            </li>
        </ul></div>        
<!-- sidebar menu end-->
    </div>
</aside>


<!--main content start-->
    <section id="main-content" class="">
        <section class="wrapper">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm nhà phân phối
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                
                                <div class="form-group">
                                    <label for="vendor">Tên nhà phân phối</label>
                                    <input type="text" class="form-control" id="vendor" name="vendor">
                                </div>                                                  
                                
                        
                            <button class="btn btn-info" id="addVendor">Submit</button>
                            </div>

                        </div>
                    </section>


                                
</div></div></section></section></section>


<script type="text/javascript">
$('#addVendor').on('click', event=>{
    var vendor = $('input[name=vendor]').val();
    function isEmptyOrSpaces(str){
        return str === null;
    }

    if(isEmptyOrSpaces(vendor)){
        alert("Xin vui lòng nhập đủ thông tin");
    }
    else{
        var formData = {
            'addVendor' : 1,
            'vendor' : vendor
            
        };
        $.ajax({
            type        : 'POST', 
            url         : './controller/addVendor.php', 
            data        : formData, 
            success:function(data){
                if(data.replace(/^\s+|\s+$/g, '')=="duplicated"){
                    alert("Tên nhà cung cấp đã tồn tại")
                }
                else{
                    alert("Thêm thành công")
                }
                $('input[name=vendor]').val("");
            },
            error:function(data){
                alert("Error");
            }

        })
    }
})
 

</script>


<script type="text/javascript">
                $("#addImage").on('click', function(){
                    var form_data = new FormData();
                    var ins = document.getElementById('img').files.length;
                    for (var x = 0; x < ins; x++) {
                        form_data.append("img[]", document.getElementById('img').files[x]);
                    }
                    $.ajax({
                        url: './controller/addImage.php', // point to server-side PHP script 
                        dataType: 'text', // what to expect back from the PHP script
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (response) {
                            $('#imgModal').modal('hide');
                            alert("success")
                        },
                        error: function (response) {
                            alert("fail")
                        }
                    });
                });
</script>



<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>
<!--common script init for all pages-->
<script src="js/scripts.js"></script>

<!--dynamic table initialization -->
<script src="js/dynamic_table_init.js"></script>


<script src="./js/fileinput.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>



</body>
</html>