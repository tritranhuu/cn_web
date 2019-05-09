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

    <title>Quản lý ảnh sản phẩm</title>

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
	function printImg($proID){
		$images = getProductImageById($proID);
		for($i=0;$i<sizeof($images);$i++){
?>
                            <div class="img item " >
                                <a href='#myModal<?php echo $i;?>' data-toggle="modal">
                                <img src='../../<?php echo $images[$i];?>' alt="" />
                                    </a>
                                <p><?php echo explode('/',$images[$i])[4];?></p>
                            </div>
                            <div class="modal fade" id='myModal<?php echo $i;?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Chỉnh sửa ảnh</h4>
                                    </div>

                                    <div class="modal-body row">

                                        <div class="col-md-5 img-modal">
                                            <img src='<?php echo "../../".$images[$i];?>' alt="" width="150" height="250">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label> Tên</label>
                                                <input id="name" value='<?php echo explode('/',$images[$i])[4];?>' class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label> Đường dẫn</label>
                                                <input id="link" value='<?php echo $images[$i];?>' class="form-control" readonly>
                                            </div>
                                            <div class="pull-right">
                                                <button class="btn btn-danger delImg" type="button" class="delete" imgName='<?php echo $images[$i];?>'>Xóa</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
<?php
		}
        $colors = getColorByProID($proID);
        for($i=0;$i<sizeof($colors);$i++){
?>
                            <div class="color item " >
                                <a href='#colorModal<?php echo $i;?>' data-toggle="modal">
                                <img src='../../<?php echo $colors[$i];?>' alt="" />
                                    </a>
                                <p><?php echo explode('/',$colors[$i])[4];?></p>
                            </div>
                            <div class="modal fade" id='colorModal<?php echo $i;?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Chỉnh sửa ảnh</h4>
                                    </div>

                                    <div class="modal-body row">

                                        <div class="col-md-5 img-modal">
                                            <img src='<?php echo "../../".$colors[$i];?>' alt="" width="150" height="250">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label> Tên</label>
                                                <input id="name" value='<?php echo explode('/',$colors[$i])[4];?>' class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label> Đường dẫn</label>
                                                <input id="link" value='<?php echo $colors[$i];?>' class="form-control" readonly>
                                            </div>
                                            <div class="pull-right">
                                                <button class="btn btn-danger delImg" type="button" class="delete" imgName='<?php echo $colors[$i];?>'>Xóa</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
<?php
        }     
	}
?>

<?php
if(!isset($_GET['proID'])){
	header('Location: edit_product.php');
}
else{
	$proID = $_GET['proID'];
?>
	<section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Quản lí ảnh
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <ul id="filters" class="media-filter">
                            <li><a href="#" data-filter=".img" id="imgFilter">Ảnh</a></li>
                            <li><a href="#" data-filter=".color" id="colorFilter">Màu</a></li>
                        </ul>
                        <a type="button" class="btn pull-right btn-sm" id="upImg" data-toggle="modal" data-target="#imgUpload"><i class="fa fa-upload"></i>Thêm ảnh</a>
                        <a type="button" class="btn pull-right btn-sm" id="upColor" data-toggle="modal" data-target="#colorUpload"><i class="fa fa-upload"></i>Thêm màu</a>
                        <div id="gallery" class="media-gal">
                            
<?php printImg($proID);?>
                        </div>

                        <!-- Modal -->
                        
                        <!-- modal -->

                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
        </section>
    </section>

<div class="modal fade" id="imgUpload" role="dialog" aria-labelledby="sizeGuide" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Thêm ảnh</h4>
        </div>
        <div class="modal-body">
        
            <div class="form-group">
                <label for="img">Ảnh sản phẩm</label>
                <span class="btn btn-default btn-file">
                        <input id="img" name="img[]" type="file" class="file" multiple data-show-upload="true" data-show-caption="true">
                </span>
            </div>  
            <button class="btn btn-info" id="addImage">Submit</button>
                                
        </div>
      
    </div>
  </div>

</div>

<div class="modal fade" id="colorUpload" role="dialog" aria-labelledby="uploadColor" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Thêm màu</h4>
        </div>
        <div class="modal-body">
        
            <div class="form-group">
                <label for="color">Màu sản phẩm</label>
                <span class="btn btn-default btn-file">
                        <input id="color" name="color[]" type="file" class="file" multiple data-show-upload="true" data-show-caption="true">
                </span>
            </div>  
            <button class="btn btn-info" id="addColor">Submit</button>
                                
        </div>
      
    </div>
  </div>
<?php
}
?>

</div>
<script type="text/javascript">
                $("#addImage").on('click', function(){
                    var form_data = new FormData();
                    var ins = document.getElementById('img').files.length;
                    for (var x = 0; x < ins; x++) {
                        form_data.append("img[]", document.getElementById('img').files[x]);
                    }
                    form_data.append("proID", <?php echo $proID;?>)
                    $.ajax({
                        url: './controller/addImage.php',
                        dataType: 'text',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (response) {
                            swal({
                                title: "Thành công",
                                text: "Thêm ảnh thành công",
                                type: "success"
                            }).then(function() {
                                window.location.reload();
                            });
                        },
                        error: function (response) {
                            alert("fail")
                        }
                    });
                });

                $("#addColor").on('click', function(){
                    var form_data = new FormData();
                    var ins = document.getElementById('color').files.length;
                    for (var x = 0; x < ins; x++) {
                        form_data.append("color[]", document.getElementById('color').files[x]);
                    }
                    form_data.append("proID", <?php echo $proID;?>)
                    $.ajax({
                        url: './controller/addColor.php', // point to server-side PHP script 
                        dataType: 'text', // what to expect back from the PHP script
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (response) {
                            swal({
                                title: "Thành công",
                                text: "Thêm màu thành công",
                                type: "success"
                            }).then(function() {
                                window.location.reload();
                            });
                        },
                        error: function (response) {
                            alert("fail")
                        }
                    });
                });

                $(".delImg").on('click', event=>{
                    var name = $(event.target).attr("imgname")
                    var formData = {
                        'delImg' : 1,
                        'url' : name,
                        'proID' : <?php echo $proID;?>      
        };
                    $.ajax({
                        url: './controller/delImage.php',
                        cache: false,
                        data: formData,
                        type: 'post',
                        success: function (response) {
                            swal({
                                title: "Thành công",
                                text: "Xóa ảnh thành công",
                                type: "success"
                            }).then(function() {
                                window.location.reload();
                            });
                            
                        },
                        error: function (response) {
                            alert("fail")
                        }
                    }); 
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



<script src="./js/fileinput.js"></script>

<script src="js/jquery.isotope.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script type="text/javascript">

    $(function() {
        var $container = $('#gallery');
        $container.isotope({
            itemSelector: '.item',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        // filter items when filter link is clicked
        $('#filters a').click(function() {
            var selector = $(this).attr('data-filter');
            $container.isotope({filter: selector});
            return false;
        });
    });
    $("document").ready(function () {
        $("a#imgFilter").click();
    });
</script>



</body>
</html>