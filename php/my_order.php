<?php
session_start();
if (!isset($_SESSION['accID']))
{
    header('Location: index.php');
}
else{
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
<title>Danh sách đơn hàng</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../styles/cart.css">
<link rel="stylesheet" type="text/css" href="../styles/cart_responsive.css">
<script src="../js/jquery-3.2.1.min.js"></script>



<?php 
include("header.php"); 
?>
		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Quản lý đơn hàng</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="index.php">Trang chủ</a></li>
							<li>Danh sách đơn hàng</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
<div class="cart_section">
			<div class="container">
				<div class="row">
					<div class="col">
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th style="text-align: center; vertical-align: middle;"><b>Mã đơn hàng</b></th> 
                                    <th style="text-align: center; vertical-align: middle;"><b>Tên nguời đặt</b></th> 
                                    <th style="text-align: center; vertical-align: middle;"><b>Địa chỉ</b></th> 
                                    <th style="text-align: center; vertical-align: middle;"><b>Số điện thoại</b></th> 
                                    <th style="text-align: center; vertical-align: middle;"><b>Ngày đặt hàng</b></th>
                                    <th style="text-align: center; vertical-align: middle;"><b>Trạng thái đơn hàng</b></th>
                                    <th style="text-align: center; vertical-align: middle;"><b>Tổng đơn</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $conn = connectDB();
                                $orders = getAllOrderByAccID($accID, $conn);
                                for($i = 0; $i < sizeof($orders); $i++) { ?>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;"><a href="detail_order.php?id=<?php echo $orders[$i]['orderID'];?>"><?php echo $orders[$i]['orderID']; ?></a></td>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $orders[$i]['name']; ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $orders[$i]['address']; ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $orders[$i]['phone']; ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $orders[$i]['created']; ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $orders[$i]['status']; ?></td>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $orders[$i]['total']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                
                        </table>
					</div>
                </div>
            </div>
</div>	
<?php include("header.php"); ?> 	
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