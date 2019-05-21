<div class="super_container">
<?php

?>
<?php 
	function printSlide($newest, $popular, $royal, $favorite){
?>

	

	<div class="super_container_inner">
		<div class="super_overlay"></div>
		<div class="home">
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">
					<div class="owl-item">
						<div class="background_image" style="background-image:url(../images/home.jpg)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Mẫu mới nhất</div>
											<div class="home_subtitle"></div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="product.php?product=<?php echo $newest['proID'];?>"><img src="../<?php echo $newest['url1'];?>" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															
															<div class="product_image"><a href="product.php?product=<?php echo $newest['proID'];?>"><img src="../<?php echo $newest['url0'];?>" alt=""></div>
															<div class="product_content">
																<div class="product_info d-flex flex-row align-items-start justify-content-start">
																	<div>
																		<div>
																			<div class="product_name"><a href="product.php?product=<?php echo $newest['proID'];?>"><?php echo $newest['proName'];?></a></div>
																			<div class="product_category">In <a href="../controller/controlcategory.php?type=<?php echo $newest['gender'];?>&page=1">
																			<?php 
																				if($newest['gender']=='M'){echo 'Male';}
																				else if($newest['gender']=='F'){echo 'Female';}
																				else {echo 'Kid';}
																			?></a></div>
																		</div>
																	</div>
																	<div class="ml-auto text-right">
																		<div class="rating_r rating_r_<?php echo $newest['rate'];?> home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="product_price text-right"><?php echo number_format((int)$newest['price'] , 0, ',', '.');?><span>đ</span></div>
																	</div>
																</div>
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">
																		<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center" onclick="window.location.href='product.php?product=<?php echo $newest['proID'];?>'">
																			<div><div><img src="../images/icon_3.svg" alt=""><div>+</div></div></div>
																		</div>
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center addCartSmall" proID="<?php echo $newest['proID'];?>" data-toggle="modal" data-target="#sizecolorMPick">
																			<div><div><img src="../images/cart_2.svg" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="product.php?product=<?php echo $newest['proID'];?>"><img src="../<?php echo $newest['url2'];?>" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(../images/box_2.jpg)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Mẫu phổ biến nhất</div>
											<div class="home_subtitle"></div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="product.php?product=<?php echo $popular['proID'];?>"><img src="../<?php echo $popular['url1'];?>" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															
															<div class="product_image"><a href="product.php?product=<?php echo $popular['proID'];?>"><img src="../<?php echo $popular['url0'];?>" alt=""></div>
															<div class="product_content">
																<div class="product_info d-flex flex-row align-items-start justify-content-start">
																	<div>
																		<div>
																			<div class="product_name"><a href="product.php?product=<?php echo $popular['proID'];?>"><?php echo $popular['proName'];?></a></div>
																			<div class="product_category">In <a href="../controller/controlcategory.php?type=<?php echo $popular['gender'];?>&page=1">
																			<?php 
																				if($popular['gender']=='M'){echo 'Male';}
																				else if($popular['gender']=='F'){echo 'Female';}
																				else {echo 'Kid';}
																			?></a></div>
																		</div>
																	</div>
																	<div class="ml-auto text-right">
																		<div class="rating_r rating_r_<?php echo $popular['rate'];?> home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="product_price text-right"><?php echo number_format((int)$popular['price'] , 0, ',', '.');?><span>đ</span></div>
																	</div>
																</div>
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">
																		<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center" onclick="window.location.href='product.php?product=<?php echo $popular['proID'];?>'">
																			<div><div><img src="../images/icon_3.svg" alt="" ><div>+</div></div></div>
																		</div>
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center addCartSmall" proID="<?php echo $popular['proID'];?>" data-toggle="modal" data-target="#sizecolorMPick">
																			<div><div><img src="../images/cart_2.svg" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="product.php?product=<?php echo $popular['proID'];?>"><img src="../<?php echo $popular['url2'];?>" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(../images/box_1.jpg)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Mẫu sang trọng nhất</div>
											<div class="home_subtitle"></div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="product.php?product=<?php echo $royal['proID'];?>"><img src="../<?php echo $royal['url1'];?>" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															
															<div class="product_image"><a href="product.php?product=<?php echo $royal['proID'];?>"><img src="../<?php echo $royal['url0'];?>" alt=""></div>
															<div class="product_content">
																<div class="product_info d-flex flex-row align-items-start justify-content-start">
																	<div>
																		<div>
																			<div class="product_name"><a href="product.php?product=<?php echo $royal['proID'];?>"><?php echo $royal['proName'];?></a></div>
																			<div class="product_category">In <a href="../controller/controlcategory.php?type=<?php echo $royal['gender'];?>&page=1">
																			<?php 
																				if($royal['gender']=='M'){echo 'Male';}
																				else if($royal['gender']=='F'){echo 'Female';}
																				else {echo 'Kid';}
																			?></a></div>
																		</div>
																	</div>
																	<div class="ml-auto text-right">
																		<div class="rating_r rating_r_<?php echo $royal['rate'];?> home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="product_price text-right"><?php echo number_format((int)$royal['price'] , 0, ',', '.');?><span>đ</span></span></div>
																	</div>
																</div>
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">
																		<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center" onclick="window.location.href='product.php?product=<?php echo $royal['proID'];?>'">
																			<div><div><img src="../images/icon_3.svg" alt="" ><div>+</div></div></div>
																		</div>
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center addCartSmall" proID="<?php echo $royal['proID'];?>" data-toggle="modal" data-target="#sizecolorMPick">
																			<div><div><img src="../images/cart_2.svg" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="product.php?product=<?php echo $royal['proID'];?>"><img src="../<?php echo $royal['url2'];?>" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(../images/box_1.jpg)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Mẫu được yêu thích nhất</div>
											<div class="home_subtitle"></div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="product.php?product=<?php echo $favorite['proID'];?>"><img src="../<?php echo $favorite['url1'];?>" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															
															<div class="product_image"><a href="product.php?product=<?php echo $favorite['proID'];?>"><img src="../<?php echo $favorite['url0'];?>" alt=""></div>
															<div class="product_content">
																<div class="product_info d-flex flex-row align-items-start justify-content-start">
																	<div>
																		<div>
																			<div class="product_name"><a href="product.php?product=<?php echo $favorite['proID'];?>"><?php echo $favorite['proName'];?></a></div>
																			<div class="product_category">In <a href="c../controller/controlcategory.php?type=<?php echo $favorite['gender'];?>&page=1">
																			<?php 
																				if($favorite['gender']=='M'){echo 'Male';}
																				else if($favorite['gender']=='F'){echo 'Female';}
																				else {echo 'Kid';}
																			?></a></div>
																		</div>
																	</div>
																	<div class="ml-auto text-right">
																		<div class="rating_r rating_r_<?php echo $favorite['rate'];?> home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="product_price text-right"><?php echo number_format((int)$favorite['price'] , 0, ',', '.');?><span>đ</span></span></div>
																	</div>
																</div>
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">
																		<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center" onclick="window.location.href='product.php?product=<?php echo $favorite['proID'];?>'">
																			<div><div><img src="../images/icon_3.svg" alt="" ><div>+</div></div></div>
																		</div>
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center addCartSmall" proID="<?php echo $favorite['proID'];?>" data-toggle="modal" data-target="#sizecolorMPick">
																			<div><div><img src="../images/cart_2.svg" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="product.php?product=<?php echo $favorite['proID'];?>"><img src="../<?php echo $favorite['url2'];?>" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

				</div>
				<div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
				<div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

				<!-- Home Slider Dots -->
				
				<div class="home_slider_dots_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_slider_dots">
									<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-center">
										<li class="home_slider_custom_dot active">01</li>
										<li class="home_slider_custom_dot">02</li>
										<li class="home_slider_custom_dot">03</li>
										<li class="home_slider_custom_dot">04</li>
									</ul>
								</div>
							</div>
						</div>
					</div>	
				</div>

			</div>
		</div>	
</div>
<?php
	}
?>