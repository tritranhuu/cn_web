<?php	

 	
    function printDetail($des,$mat,$arr){	
	
    
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
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab3">Details</a></li>
								<li><a data-toggle="tab" href="#tab2">Reviews </a></li>
							</ul>
							<div class="tab-content">
								<div id="tab1" class="tab-pane fade in active">
									<p><?php echo $des ?></p>
								</div>
                                <div id="tab3" class="tab-pane fade in active">
									<p><?php echo $mat ?></p>
								</div>
								<div id="tab2" class="tab-pane fade in">

									<div class="row">
										<div class="col-md-4 col-lg-6">
											<div class="product-reviews">
                                                <?php
                                                foreach ($arr as $i){
                                                echo'<div class="single-review">
                                                <div class="review-heading col-lg-12">
                                                    <div><a href="#"><i class="fa fa-user-o"></i> '.$i['username'].'</a></div>
                                                    <div><a href="#"><i class="fa fa-clock-o"></i> '.$i['created'].'</a></div>
													<div class="review-rating pull-right">';
													for($t = 1 ; $t<=$i['point']; $t++)
														echo '<i class="fa fa-star"></i>';
													for($t = $i['point']+1 ; $t<=5; $t++)
                                                        echo '<i class="fa fa-star-o empty"></i>';
                                                        
                                                    echo'</div>
                                                </div>
                                                <div class="review-body col-lg-12">
                                                    <p>'.$i['content'].'</p>
                                                </div>
                                            </div>
											';
												}
                                                ?>
												
											</div>
										</div>
                                        <br/>
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
