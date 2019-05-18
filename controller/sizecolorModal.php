<?php
if(isset($_POST['getCS'])){
	$proID = $_POST['proID'];
	include("../database/connectDB.php");
	require_once("../database/getProduct.php");
	$conn = connectDB();
	$option = getOptionProduct($conn,$proID);
?>
						<div class="product_size">
								<div class="product_size_title">Kích cỡ</div>
								<ul class="d-flex flex-row align-items-start justify-content-start">
									
									<?php
										$tmp = array();
										for( $t = 0 ; $t < sizeof( $option) ; $t++){
											$i =  $option[$t]['size'];
											if(!in_array($i,$tmp)){
											array_push($tmp,$i);
											echo '<li>';
											echo '<input type="radio" id="radio_'.$i.'"name="size_radio" class="regular_radio" checked value="'.$i.'">';
											echo '<label for="radio_'.$i.'">'.$i.'</label>';
											echo '</li>';
											}
									}
									?>
								</ul>
							</div>
							<div class="product_size">
								<div class="product_size_title">Màu sắc</div>
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<?php
										$tmp = array();
										for( $t = 0 ; $t < sizeof( $option) ; $t++){
											$i =  $option[$t]['color'];
											if(!in_array($i,$tmp)){
											array_push($tmp,$i);
											echo '<li>';
											echo '<input type="radio" id="radio_'.$i.'"name="color_radio" class="regular_radio" checked value="'.$i.'">';
											echo '<label for="radio_'.$i.'"><img src="../'.$i.'" width="36px" height="36px"></label>';
											echo '</li>';
											}
									}
									?>
								
								</ul>
							</div>
<?php
}

?>


						