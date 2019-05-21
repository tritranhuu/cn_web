<?php
session_start();
if (!isset($_SESSION['accID']))
{
    header('Location: index.php');
}
else{
    $orderID = $_GET['id'];
    $accID = $_SESSION['accID'];
}
?>
<?php 
include("../database/connectDB.php");
include("../database/dbCart.php");
include("../database/dbOrder.php");

?>
<!DOCTYPE html>
<html lang="en">
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<head>
<title>Chi tiết đơn hàng</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../styles/cart.css">
<link rel="stylesheet" type="text/css" href="../styles/order.css">
<link rel="stylesheet" type="text/css" href="../styles/cart_responsive.css">
<script src="../js/jquery-3.2.1.min.js"></script>



<?php include("header.php"); ?>
		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Quản lý đơn hàng</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="index.php">Trang chủ</a></li>
							<li>Chi tiết đơn hàng</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
<div class="cart_section">
			<div class="container">
				<div class="row">
					<div class="col">
                    <h2 style="text-align: center; margin-bottom: 20px">Đơn hàng mã <?php echo " ".$orderID?></h2>
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th style="text-align: center; vertical-align: middle;"><b></b></th>
                                    <th style="text-align: center; vertical-align: middle;"><b>Tên sản phẩm</b></th>
                                    <th style="text-align: center; vertical-align: middle;"><b>Kích cỡ</b></th>
                                    <th style="text-align: center; vertical-align: middle;"><b>Màu sắc</b></th> 
                                    <th style="text-align: center; vertical-align: middle;"><b>Giá</b></th> 
                                    <th style="text-align: center; vertical-align: middle;"><b>Số lượng</b></th> 
                                    <th style="text-align: center; vertical-align: middle;"><b>Tổng </b></th> 
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php 
                                $conn = connectDB();
                                $items = getItemsByOrderID($orderID, $accID, $conn);
                                $total = 0;
                                for($i = 0; $i < sizeof($items); $i++) { ?>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;"><img src="../<?php echo $items[$i]['url']; ?>" height=50 width=50></td>
                                    <td style="text-align: center; vertical-align: middle;"><a href="product.php?product=<?php echo $items[$i]['proID']?>"><?php echo $items[$i]['proName']; ?></a></td>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $items[$i]['size']; ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><img src="../<?php echo $items[$i]['color']; ?>" style="height: 20px; width: 20px"></td>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $items[$i]['price']; ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $items[$i]['quantity']; ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $items[$i]['quantity']*$items[$i]['price']; $total+=$items[$i]['quantity']*$items[$i]['price'];?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot align="right">
                                <tr>
                                    <td colspan="5" style="text-align: center; vertical-align: middle;"></td>
                                    <td colspan="1" style="text-align: center; vertical-align: middle;"><b>Tổng hóa đơn</b></td>
                                    <td colspan="1" style="text-align: center; vertical-align: middle;"><?php echo $total;?></td>
                                </tr>
                                
                            </tfoot>
                        </table>
					</div>
                </div>
            </div>
</div>	
<?php include("header.php"); ?>                    
<?php require("footer.php");?>
<script src="../styles/bootstrap-4.1.2/popper.js"></script>
<script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/cart.js"></script>
</body>
</html>