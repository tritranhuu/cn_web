<?php
include("./controller/controllerData.php");
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
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!--dynamic table-->
    <link href="js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <script src="js/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

</head>

<?php
include("header.php");
?>
<!--sidebar end-->


 <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Dynamic Table
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
<?php 
printOrderTableData();
?>         
                    </div>
                    </div>
                </section>
            </div>
        </div>
</section>
</section>


</section>


 <div class="modal fade" id='orderModal' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Thông tin đơn hàng</h4>
                                    </div>

                                    <div class="modal-body row">

                                    <table class="table" id="modalTable">
                                        <thead>
                                        <tr>
                                        <th>Mã mặt hàng</th>
                                        <th>Tên mặt hàng</th>    
                                        <th>Kích cỡ</th>
                                        <th>Màu sắc</th>
                                        <th>Số lượng</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tableBody">
                                        <tr>
                                        <td>aa</td>
                                        <td>aa</td>
                                        <td>bb</td>
                                        <td>cc</td>
                                        <td>dd</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <div class="row">
                                    <div class="col-md-1"></div>                            
                                    <div class="col-md-4 form-group">
                                        <select class="form-control m-bot15" id="status" name="status" style="color: black">
                                            <option value="fresh">Đã xác nhận</option>
                                            <option value="delivering">Đang giao hàng</option>
                                            <option value="complete">Hoàn thành</option>
                                        </select>
                                    </div>
                                    <div class="col-md-7 pull-right">
                                        <button class="btn btn-info" id="changeStatus">Thay đổi trạng thái</button>
                                    </div> 
                                    </div>
                                    </div>

                                </div>
                            </div>
                        </div>


<script type="text/javascript">
    $('.orderDetail').on('click', event=>{
        var id = $(event.target).attr('id')
        var formData = {
            'orderDetail' : 1,
            'orderID' : id        
        };
        
        $.ajax({
            type        : 'POST', 
            url         : './controller/getOrderDetail.php', 
            data        : formData, 
            success:function(data){
                $('#tableBody').remove()
                $('#modalTable').append(data)
                $('#changeStatus').attr("orderid", id)
            },
            error:function(data){
                alert("Error");
            }

        })

    })
    $('#changeStatus').on('click', event=>{
        var id = $(event.target).attr('orderid')
        var status = $('select[name=status]').val();
        
        var formData = {
            'changeStatus' : 1,
            'orderID' : id, 
            'status' : status        
        };
        $('#tableBody').remove()
        $.ajax({
            type        : 'POST', 
            url         : './controller/changeOrderStatus.php', 
            data        : formData, 
            success:function(data){
                $('#orderModal').modal('hide');
                swal("Cập nhật thành công")
                var row = $(`#${id}`).closest('tr').find("td").eq(5)
                row.text(status)
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

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>
<!--common script init for all pages-->
<script src="js/scripts.js"></script>

<!--dynamic table initialization -->
<script src="js/dynamic_table_init.js"></script>



</body>
</html>