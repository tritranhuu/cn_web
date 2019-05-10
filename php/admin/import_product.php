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

    <title>Nhập hàng</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!--dynamic table-->
    <link href="js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />
    <link href="js/iCheck/skins/minimal/minimal.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <script src="js/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
</head>

<?php
include("header.php");
?>

<?php
    function printColor($proID){
    $colors = getColorByProID($proID);
    for($i=0;$i<sizeof($colors);$i++){
?>
            <div class="radio single-row">
                <input tabindex="3" type="radio" id="color" name="color" value="<?php echo $colors[$i];?>">
                <label><img src="../../<?php echo $colors[$i];?>"></label>
            </div>
<?php
        }        
    }
?>

<?php
    function printStocks($proID){
?>
<table class="table">
    <thead>
      <tr>
        <th>Kích cỡ</th>
        <th>Màu sắc</th>
        <th>Dư kho hiện tại</th>
      </tr>
    </thead>
   <tbody>
<?php
        $stocks = getStockById($proID);
        for($i=0;$i<sizeof($stocks);$i++){
?>
    <tr>
        <td><?php echo $stocks[$i]['size'];?></td>
        <td><img src='../../<?php echo $stocks[$i]['color'];?>'></td>
        <td><?php echo $stocks[$i]['stock'];?></td>
    </tr>
<?php
        }
?>
      </tr>
    </tbody>
  </table>
<?php
    }
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
                            Nhập hàng vào kho
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
                            <button type="submit" class="btn btn-info" id="addProduct">Submit</button>
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
                            Nhập kho mặt hàng có mã <?php echo " ".$product['proID'];?>
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <div class="pull-right"><a data-toggle="modal" href='#stock'>Số dư hiện tại có trong kho</a></div>
                                <div class="modal fade" id='stock' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Số dư kho cho mặt hàng mã <?php echo " ".$proID;?></h4>
                                    </div>

                                    <div class="modal-body row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6"><?php printStocks($proID);?></div>
                                        <div class="col-md-3"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                                <br>
                                <div class="form-group">
                                    <label for="size">Kích cỡ</label>
                                        <select class="form-control m-bot15" id="size" name="size" style="color: black">
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                        </select>
                                </div>                               
                                
                                <div class="form-group">
                                        <label for="color">Màu sắc</label>
                                        <div class="icheck minimal">
<?php printColor($proID);?>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <label for="quantity">Số lượng</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity">
                                </div>
                            <button class="btn btn-info" id="importProduct">Nhập</button>
                            </div>

                        </div>
                    </section>


                                
</div></div></section></section>
<?php
}
?>

<script type="text/javascript">
    $("#importProduct").on('click', event=>{
        var size = $('select[name=size]').val();
        var color = $('input[name=color]:checked').val();
        var quantity = $('input[name=quantity]').val();
        
        var formData = {
            'import' : 1,
            'proID' : <?php echo $proID;?>,
            'size' : size,
            'color' : color,
            'quantity' : quantity         
        };
        $.ajax({
            type        : 'POST', 
            url         : './controller/importProduct.php', 
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
                            text: "Số mặt hàng có sẵn trong kho hiện tại là "+data,
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
    })
</script>


<!--Core js-->
<script src="bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<script src="js/iCheck/jquery.icheck.js"></script>

<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>

<!--common script init for all pages-->
<script src="js/scripts.js"></script>

<!--icheck init -->
<script src="js/icheck-init.js"></script>

</body>
</html>