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
<script src="../js/jquery-3.2.1.min.js"></script>
<?php 
include("../database/connectDB.php");
include("../database/dbCart.php"); 

?>

<?php require("header.php");?>
<?php require("slide.php");?>
<?php

  require("../database/getProduct.php");
  
  printSlide();
?>
<div class="mt-5 row">
  <div class="col-lg-6 offset-lg-3">
    <div class="section_title text-center">Popular on Little Closet</div>
  </div>
  </div>
  <div class="row page_nav_row">
    <div class="col">
      <div class="page_nav">
        <ul class="d-flex flex-row align-items-start justify-content-center">
          <li><a href="../controller/controlcategory.php?type=F&page=1&filertype=false">Women</a></li>
            <li><a href="../controller/controlcategory.php?type=M&page=1&filertype=false">Men</a></li>
            <li><a href="../controller/controlcategory.php?type=K&page=1&filertype=false">Kids</a></li>
          </ul>
        </div>
      </div>
    </div>
</div>
<?php
  
  require("./viewFunction/product_box.php");
  $conn = connectDB();
  $arr =  getProduct($conn);
  echo'
  <div class="products">
  <div class="container">';
  echo "<div class=\"row products_row\">";
    for ($i = 0 ; $i < sizeof($arr); $i++){
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
<div class="boxes">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="boxes_container d-flex flex-row align-items-start justify-content-between flex-wrap">

              <!-- Box -->
              <div class="box">
                <div class="background_image" style="background-image:url(../images/box_1.jpg)"></div>
                <div class="box_content d-flex flex-row align-items-center justify-content-start">
                  <div class="box_left">
                    <div class="box_image">
                      <a href="category.html">
                        <div class="background_image" style="background-image:url(../images/box_1_img.jpg)"></div>
                      </a>
                    </div>
                  </div>
                  <div class="box_right text-center">
                    <div class="box_title">Trendsetter Collection</div>
                  </div>
                </div>
              </div>

              <!-- Box -->
              <div class="box">
                <div class="background_image" style="background-image:url(../images/box_2.jpg)"></div>
                <div class="box_content d-flex flex-row align-items-center justify-content-start">
                  <div class="box_left">
                    <div class="box_image">
                      <a href="category.html">
                        <div class="background_image" style="background-image:url(../images/box_2_img.jpg)"></div>
                      </a>
                    </div>
                  </div>
                  <div class="box_right text-center">
                    <div class="box_title">Popular Choice</div>
                  </div>
                </div>
              </div>

              <!-- Box -->
              <div class="box">
                <div class="background_image" style="background-image:url(../images/box_3.jpg)"></div>
                <div class="box_content d-flex flex-row align-items-center justify-content-start">
                  <div class="box_left">
                    <div class="box_image">
                      <a href="category.html">
                        <div class="background_image" style="background-image:url(../images/box_3_img.jpg)"></div>
                      </a>
                    </div>
                  </div>
                  <div class="box_right text-center">
                    <div class="box_title">Popular Choice</div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Features -->

    <div class="features">
      <div class="container">
        <div class="row">
          
          <!-- Feature -->
          <div class="col-lg-4 feature_col">
            <div class="feature d-flex flex-row align-items-start justify-content-start">
              <div class="feature_left">
                <div class="feature_icon"><img src="../images/icon_1.svg" alt=""></div>
              </div>
              <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                <div class="feature_title">Thanh toán an toàn </div>
              </div>
            </div>
          </div>

          <!-- Feature -->
          <div class="col-lg-4 feature_col">
            <div class="feature d-flex flex-row align-items-start justify-content-start">
              <div class="feature_left">
                <div class="feature_icon ml-auto mr-auto"><img src="../images/icon_2.svg" alt=""></div>
              </div>
              <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                <div class="feature_title">Sản phẩm chất lượng</div>
              </div>
            </div>
          </div>

          <!-- Feature -->
          <div class="col-lg-4 feature_col">
            <div class="feature d-flex flex-row align-items-start justify-content-start">
              <div class="feature_left">
                <div class="feature_icon"><img src="../images/icon_3.svg" alt=""></div>
              </div>
              <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                <div class="feature_title">Vận chuyển nhanh chóng</div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
</div>
</div>
<?php require("footer.php");?>
</div>
</div>
</div>


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