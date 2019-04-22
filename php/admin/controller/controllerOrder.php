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
