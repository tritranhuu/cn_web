<?php 
include("./model/database.php");
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
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            <form>
                                <div class="form-group">
                                    <label for="proID">Nhập mã mặt hàng</label>
                                    <input type="text" class="form-control" id="proID" name="proID">
                                </div>
                            <button type="submit" class="btn btn-info" id="">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>


                                
</div></div></section></section>
<?php
}
else{
    $proID = $_GET['proID'];
    $product = getProductInfoById($proID);
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
                            Chỉnh sửa mặt hàng có mã <?php echo " ".$product['proID'];?>
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <button class="btn btn-info" id="editImg" onclick="window.location.href='edit_image.php?proID=<?php echo $product['proID'];?>'">Chỉnh sửa ảnh</button>
                            <br>
                            <br>
                                <div class="form-group">
                                    <label for="proName">Tên mặt hàng</label>
                                    <input type="text" class="form-control" id="proName" name="proName" value="<?php echo $product['proName'];?>">
                                </div>
                  
                                <div class="form-group">
                                    <label for="type">Loại</label>
                                    <input type="text" class="form-control" id="type" name="type" value="<?php echo $product['type'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="material">Vật liệu</label>
                                    <input type="text" class="form-control" id="material" name="material" value="<?php echo $product['material'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Loại</label>
                                    <?php $gender=$product['gender'];
                                        if($gender=="M"){
                                    ?>
                                        <select class="form-control m-bot15" id="gender" name="gender">
                                            <option value="M" selected>Nam</option>
                                            <option value="F">Nữ</option>
                                            <option value="K">Trẻ Em</option>
                                        </select>
                                    <?php
                                        }
                                        else if($gender=="F"){
                                    ?>
                                        <select class="form-control m-bot15" id="gender" name="gender">
                                            <option value="M">Nam</option>
                                            <option value="F" selected>Nữ</option>
                                            <option value="K">Trẻ Em</option>
                                        </select>
                                    <?php
                                        }
                                        else{
                                    ?>
                                        <select class="form-control m-bot15" id="gender" name="gender">
                                            <option value="M">Nam</option>
                                            <option value="F">Nữ</option>
                                            <option value="K" selected="">Trẻ Em</option>
                                        </select>
                                    <?php        
                                        }
                                    ?>
                                        
                                </div>                                
                    
                                <div class="form-group">
                                    <label for="import-price">Giá nhập</label>
                                    <input type="number" class="form-control" id="import-price" name="import_price" value="<?php echo $product['import_price'];?>">
                                </div>

                                <div class="form-group">
                                    <label for="price">Giá bán</label>
                                    <input type="number" class="form-control" id="price" name="price" value="<?php echo $product['price'];?>">
                                </div>

                                <div class="form-group">
                                <label for="description">Mô tả</label>
                                    <textarea class="form-control" rows="6" id="description" name="description"><?php echo $product['description'];?></textarea>
                                </div>                                
                                
                                
                           
                            <button class="btn btn-info" id="editProduct">Lưu</button>
                            </div>

                        </div>
                    </section>


                                
</div></div></section></section>
<?php
}
?>


<script type="text/javascript">
    $('#editProduct').on('click', event=>{
    var proName = $('input[name=proName]').val();
    var type = $('input[name=type]').val();
    var price = $('input[name=price]').val();
    var description = $('textarea[name=description]').val();
    var material = $('input[name=material]').val();
    var companyName = $('select[name=companyName]').val();
    var gender = $('select[name=gender]').val();
    var import_price = $('input[name=import_price]').val();
    function isEmptyOrSpaces(str){
        return str === null;
    }

    if(isEmptyOrSpaces(proName)|isEmptyOrSpaces(type)){
        alert("Xin vui lòng nhập đủ thông tin");
    }
    else{
        var formData = {
            'edit' : 1,
            'proID' : <?php echo $proID;?>,
            'proName' : proName,
            'type' : type,
            'price' : price,
            'description' : description,
            'material' : material,
            'gender' : gender,
            'import_price' : import_price,            
        };
        $.ajax({
            type        : 'POST', 
            url         : './controller/editProduct.php', 
            data        : formData, 
            success:function(data){
                if(data.replace(/^\s+|\s+$/g, '') == "noinfo"){
                    swal({
                            title: "Thất bại",
                            text: "Hãy nhập đủ thông tin",
                            type: "error"
                            })
                }
                else{
                    swal({
                            title: "Thành công",
                            text: "Chỉnh sửa mặt hàng thành công",
                            type: "success"
                            }).then( function(){
                                window.location.reload();
                            })
                }
                
            },
            error:function(data){
                alert("Error");
            }

        })

    }
})
</script>

<script src="./js/fileinput.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>