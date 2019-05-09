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
<title>Detail order</title>
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
							<li>Đơn hàng của tôi</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
<div class="cart_section">
			<div class="container">
				<div class="row">
					<div class="col">
                    <h2><b>Đơn hàng của tôi</b></h2>
                        <table class="table table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th><b>Sản phẩm</b></th> 
                                    <th><b>Giá</b></th> 
                                    <th><b>Số lượng</b></th> 
                                    <th><b>Tổng </b></th> 
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php 
                                $username = "root"; 
                                $password = "";     
                                $server   = "localhost";  
                                $dbname   = "clothes_shop";   
                    
                                $conn = mysqli_connect($server, $username, $password, $dbname);

                                $query = "select * from detail_order,product where detail_order.proID=product.proID and orderID='1'";
                                $sql = mysqli_query($conn,$query);
                                while ($res = mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td><?php echo $res['proName']; ?></td>
                                    <td><?php echo $res['price']; ?></td>
                                    <td><?php echo $res['quantity']; ?></td>
                                    <td><?php echo $res['price']*$res['quantity']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot align="right">
                                <tr>
                                    <td colspan="3">Tổng hóa đơn</td>
                                    <td><?php ?></td>
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