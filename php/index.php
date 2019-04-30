<!DOCTYPE html>
<html lang="en">
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<head>
<title>Little Closet</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
<link rel="stylesheet" type="text/css" href="../styles/style.css">
<?php 
include("../database/connectDB.php");
include("../database/dbCart.php"); 
?>

<?php require("header.php");?>
<?php require("slide.php");?>
<?php

  require("../database/getProduct.php");
  require("popular.php");
  require("product_box.php");
  

  $conn = connectDB();
  $arr =  getProduct($conn);
  echo'
  <div class="products">
  <div class="container">';
  echo "<div class=\"row products_row\">";
    for ($i = 0 ; $i < 12; $i++){
        $arr2= getCmtandRate($conn,$arr[$i]['proID']);
        printproduct($arr[$i]['proID'],$arr[$i]['url'],$arr[$i]['price'],$arr[$i]['proName'],$arr[$i]['gender'],$arr2);
  }
?>
</div>
          <div class="row load_more_row">
                        <div class="col">
                            <div class="button load_more ml-auto mr-auto" id="loadMore"><a href="#">load more</a></div>
                        </div>
                    </div>
                </div>
            </div>
<?php require("feature.php");?>
</div>
</div>
<?php require("footer.php");?>
</div>
</div>
</div>

<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script>
$(document).ready(
  $(function () {
    $("div.product").slice(0, 10).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $("div.product:hidden").slice(0, 6).slideDown();
        if ($("div.product:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
    });
  })
);


</script>

<script src="../styles/bootstrap-4.1.2/popper.js"></script>
<script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>

<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/progressbar/progressbar.min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>