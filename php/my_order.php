<?php
session_start();
if (!isset($_SESSION['accID']))
{
    header('Location: index.php');
}
?>

<?php 
include("../database/connectDB.php");
include("../database/dbCart.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<head>
<title>My order</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
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
                        <table class="table table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th>Mã đơn hàng</th> 
                                    <th>Ngày mua</th> 
                                    <th>Gửi đến</th> 
                                    <th>Tổng tiền</th> 
                                    <th>Trạng thái đơn hàng</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $username = "root"; 
                                $password = "Tri200698";     
                                $server   = "localhost";  
                                $dbname   = "clothes_shop";   
                    
                                $conn = mysqli_connect($server, $username, $password, $dbname);

                                $query = "select * from order_product where accID='1'";
                                $sql = mysqli_query($conn,$query);
                                while ($result = mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td><?php echo $result['orderID']; ?></td>
                                    <td><?php echo $result['created']; ?></td>
                                    <td><?php echo $result['address_user']; ?></td>
                                    <td><?php echo $result['amount']; ?></td>
                                    <td><?php echo $result['status_order']; ?></td>
                                    <td><a href="detail_order.php?id=<?php echo $result['orderID'];?>">Xem chi tiết đơn hàng</a></td>
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