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

<?php include('header.php');?>


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
                                <div class="pull-right"><a data-toggle="modal" href='#vendorList'>Danh sách nhà phân phối</a></div>
                            <div class="modal fade" id='vendorList' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Danh sách các nhà phân phối</h4>
                                    </div>

                                    <div class="modal-body row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6"><?php printCompanyListModal();?></div>
                                        <div class="col-md-3"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                                <br>
                                <div class="form-group">
                                    <label for="vendor">Nhập tên nhà phân phối mới</label>
                                    <input type="text" class="form-control" id="vendor" name="vendor">
                                </div>                                                  
                                
                        
                            <button class="btn btn-info" id="addVendor">Thêm +</button>
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



<script src="./js/fileinput.js"></script>


</body>
</html>