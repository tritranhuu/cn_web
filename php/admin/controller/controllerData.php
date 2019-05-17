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
                        <th>Trạng thái đơn hàng</th>
                        <th>Tổng đơn hàng</th>
                    </tr>
                    </thead>
                    <tbody>
<?php
		$sql = getAllOrder();
		while($res = mysqli_fetch_array($sql)){
			echo "<tr><td data-toggle='modal' data-target='#orderModal' style='cursor: pointer' id='".$res['orderID']."' class='orderDetail'>".$res['orderID']."</td><td>".$res['name']."</td><td>".$res['address']."</td><td>".$res['shipping']."</td><td>".$res['payment']."</td><td>".$res['status']."</td><td>".$res['total']."</td></tr>";
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
                        <th>Trạng thái đơn hàng</th>
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
                        <th>Chỉnh sửa</th>
                        <th>Nhập hàng</th>
                    </tr>
                    </thead>
                    <tbody>
<?php
        $sql = getAllProduct();
        while($res = mysqli_fetch_array($sql)){
            echo "<tr><td>".$res['proID']."</td><td><a href='../product.php?product=".$res['proID']."'>".$res['proName']."</a></td><td>".$res['companyName']."</td><td>".$res['import_price']."</td><td>".$res['price']."</td><td><div style='cursor: pointer' class='detail' proid='".$res['proID']."''><a href='edit_product.php?proID=".$res['proID']."'>Sửa</a></div></td><td><div style='cursor: pointer' class='detail' proid='".$res['proID']."''><a href='import_product.php?proID=".$res['proID']."'>Nhập</a></div></td></tr>";
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
                        <th>Chỉnh sửa</th>
                        <th>Nhập hàng</th>
                    </tr>
                    </tfoot>
                    </table>


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