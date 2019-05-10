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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
</head>

<?php
include("header.php");
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
                            Thêm nhà phân phối
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                
                                <div class="form-group">
                                    <label for="username">Tên đăng nhập</label>
                                    <input type="text" class="form-control" id="username_add" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" class="form-control" id="password_add" name="password">
                                </div>  
                                <div class="form-group">
                                    <label for="name">Họ và tên</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>  
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>  
                                <div class="form-group">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>  
                                <div class="form-group">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="phone" class="form-control" id="phone" name="phone">
                                </div>                                                    
                                 <div class="form-group">
                                    <label for="gender">Giới tính</label>
                                        <select class="form-control m-bot15" id="gender" name="gender">
                                            <option value="M">Nam</option>
                                            <option value="F">Nữ</option>
                                            <option value="O">Khác</option>
                                        </select>
                                </div>
                                 <div class="form-group">
                                    <label for="admin">Admin</label>
                                        <select class="form-control m-bot15" id="admin" name="admin">
                                            <option value=1>Có</option>
                                            <option value=0>Không</option>
                                        </select>
                                </div>  
                        
                            <button class="btn btn-info" id="addAccount">Submit</button>
                            </div>

                        </div>
                    </section>


                                
</div></div></section></section></section>


<script type="text/javascript">

function isEmptyOrSpaces(str){
    return str === null;
}

function resetInput(){
    $('input[name=name]').val("")
    $('input[name=username]').val("");
    $('input[name=email]').val("");
    $('select[name=gender]').val("");
    $('select[name=admin]').val("");
    $('input[name=password]').val("");
    $('input[name=address]').val("");
    $('input[name=phone]').val("");

}

$('#addAccount').on("click", event =>{
    var name = $('input[name=name]').val();
    var username = $('input[name=username]').val();
    var email = $('input[name=email]').val();
    var gender = $('select[name=gender]').val();
    var admin = $('select[name=admin]').val();
    var password = $('input[name=password]').val();
    var address = $('input[name=address]').val();
    var phone = $('input[name=phone]').val();
    
        if(isEmptyOrSpaces(name)|isEmptyOrSpaces(username)|isEmptyOrSpaces(email)|isEmptyOrSpaces(password)){
            alert("Xin vui lòng nhập đủ thông tin");
        }
        else{
            var formData = {
                'addAccount' : 1,
                'name' : name,
                'username' : username,
                'email' : email,
                'pass' : password,
                'gender' : gender,
                'admin' : admin,
                'phone' : phone,
                'address' : address
            };
            $.ajax({
                type        : 'POST', 
                url         : './controller/addAccount.php', 
                data        : formData,
                encode      : true,
                success     :function(data){
                    if(data.replace(/^\s+|\s+$/g, '') == "username"){
                        swal("Tên đăng nhập đã bị trùng");
                        $('input[name=username]').val("");
                        $('input[name=password]').val("");
                    }
                    else if(data.replace(/^\s+|\s+$/g, '') == "email"){
                        swal("Địa chỉ email đã được đăng kí");
                        $('input[name=email]').val("");
                        $('input[name=password]').val("");
                    }
                    else{
                        swal("Đăng kí thành công");
                        resetInput();
                        
                    }
                },
                error       :function(data){
                    alert("Đã có lỗi, xin vui lòng thử lại");
                }

            })

        }  
    
})

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