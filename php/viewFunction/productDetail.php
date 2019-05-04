<?php	
    function printDetail($des,$mat,$arr,$proID ){	
	
    
?>	
<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			
				<!--  Product Details -->
				<div class="product product-details clearfix">
					
					<div class="col-md-12">
						<div class="product-tab">
							<ul class="tab-nav">
								<li ><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab3">Details</a></li>
								<li class="active"><a data-toggle="tab" href="#tab2">Reviews </a></li>
							</ul>
							<div class="tab-content">
								<div id="tab1" class="tab-pane fade in ">
									<p><?php echo $des ?></p>
								</div>
                                <div id="tab3" class="tab-pane fade in ">
									<p><?php echo $mat ?></p>
								</div>
								<div id="tab2" class="tab-pane fade in active">

									<div class="row">
										<div class="col-md-4 col-lg-6">
											<div class="product-reviews">
												<?php
												if(isset($_SESSION['pagecmt']))
                                                for ( $i = ($_SESSION['pagecmt']-1)*4 ; $i<($_SESSION['pagecmt'])*4 && $i<sizeof($arr); $i++){
                                                echo'<div class="single-review">
                                                <div class="review-heading col-lg-12">
                                                    <div><a href="#"><i class="fa fa-user-o"></i> '.$arr[$i]['username'].'</a></div>
                                                    <div><a href="#"><i class="fa fa-clock-o"></i> '.$arr[$i]['created'].'</a></div>
													<div class="review-rating pull-right">';
													for($t = 1 ; $t<=$arr[$i]['point']; $t++)
														echo '<i class="fa fa-star"></i>';
													for($t = $arr[$i]['point']+1 ; $t<=5; $t++)
                                                        echo '<i class="fa fa-star-o empty"></i>';
                                                        
                                                    echo'</div>
                                                </div>
                                                <div class="review-body col-lg-12">
                                                    <p>'.$arr[$i]['content'].'</p>
                                                </div>
                                            </div>
											';
												}
												?>
												 <br/> <br/>
											<?php if( (sizeof($arr)/3)>=1){
												echo '<ul class="reviews-pages">';
												for($k =1;$k<=ceil(sizeof($arr)/3);$k++){
												echo '
												<li><a href="../controller/product_controller.php?action=index&page='.$k.'&product='.$proID.'">'.$k.'</a></li>';
												}
												echo'
												<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
												</ul>';
												}
												else{
												
														echo '<li class="active">1</li>';
													
												}
												
												?>
												
											</div>
										</div>
                                        <br/>
<?php
if(isset($_SESSION['accID'])){
?>
										<div class="col-md-6 col-lg-6 mycmt ">
											<h4 class="text-uppercase">Write Your Review</h4>
											<p>Your email address will not be published.</p>
											<form class="review-form">
												<div class="form-group">
													<textarea class="input" name ="input" id ="input" placeholder="Your review"></textarea>
												</div>
												<div class="form-group">
													<div class="input-rating">
														<strong class="text-uppercase">Your Rating: </strong>
														<div class="stars" name = "rate" >
															
															<input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
															<input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
															<input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
															<input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
															<input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
														</div>
													</div>
												</div>
												<input name="submit" id="submit" class="btn btn-primary" type="button" value="Submit">
											</form>
										</div>
<?php	
}
?>

									</div>



								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /Product Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
    <?php	
    }	
?>	