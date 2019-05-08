<?php
include("./model/database.php");
?>

<?php
	function printOrderTableData(){
?>
<table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Người mua</th>
                        <th>Địa chỉ</th> 
                        <th>Hình thức vận chuyển</th>
                        <th>Phương thức thanh toán</th>
                        <th>Tổng đơn hàng</th>
                    </tr>
                    </thead>
                    <tbody>
<?php
		$sql = getAllOrder();
		while($res = mysqli_fetch_array($sql)){
			echo "<tr><td>".$res['orderID']."</td><td>".$res['name']."</td><td>".$res['address']."</td><td>".$res['shipping']."</td><td>".$res['payment']."</td><td>".$res['total']."</td></tr>";
		}
?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Người mua</th>
                        <th>Địa chỉ</th> 
                        <th>Hình thức vận chuyển</th>
                        <th>Phương thức thanh toán</th>
                        <th>Tổng đơn hàng</th>
                    </tr>
                    </tfoot>
                    </table>

<?php 
} 
?>


<?php
    function printProductTableData(){
?>
<table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>Mã mặt hàng</th>
                        <th>Tên mặt hàng</th>
                        <th>Nhà cung cấp</th> 
                        <th>Giá nhập</th>
                        <th>Giá bán</th>
                        <th>Chi tiết</th>
                    </tr>
                    </thead>
                    <tbody>
<?php
        $sql = getAllProduct();
        while($res = mysqli_fetch_array($sql)){
            echo "<tr><td>".$res['proID']."</td><td>".$res['proName']."</td><td>".$res['companyName']."</td><td>".$res['import_price']."</td><td>".$res['price']."</td><td><div style='cursor: pointer' data-toggle='modal' data-target='#sizeModal' class='detail' proid='".$res['proID']."''><a href='edit_product.php?proID=".$res['proID']."'>Sửa</a></div></td></tr>";
        }
?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Mã mặt hàng</th>
                        <th>Tên mặt hàng</th>
                        <th>Nhà cung cấp</th> 
                        <th>Giá nhập</th>
                        <th>Giá bán</th>
                        <th>Chi tiết</th>
                    </tr>
                    </tfoot>
                    </table>

<!-- <div class="modal fade" id="sizeModal" role="dialog" aria-labelledby="sizeGuide" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="sizeTitle">Chi tiết sản phẩm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="id"></div>
            <div class=""></div>
        </div>
      
    </div>
  </div>
</div>

<script type="text/javascript">
    $('.detail').on('click', event=>{
        var id = $(event.target).attr("proid");
        var body = $('.modal-body');

    })
</script> -->

<?php 
} 
?>

<?php
    function printAccountTableData(){
?>
<table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>Mã tài khoản</th>
                        <th>Tên người dùng</th>
                        <th>Email</th> 
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Admin</th>
                    </tr>
                    </thead>
                    <tbody>
<?php
        $sql = getAllAccount();
        while($res = mysqli_fetch_array($sql)){
            echo "<tr><td>".$res['accID']."</td><td>".$res['name']."</td><td>".$res['email']."</td><td>".$res['address']."</td><td>".$res['phone']."</td><td>".$res['admin']."</td></tr>";
        }
?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Mã tài khoản</th>
                        <th>Tên người dùng</th>
                        <th>Email</th> 
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Admin</th>
                    </tr>
                    </tfoot>
                    </table>

<?php 
} 
?>