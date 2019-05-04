<?php
	function ShowFilter($typep,$gender){
?>

<div class="row products_bar_row">
					<div class="col">
						<div class="products_bar d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
						<div class="products_bar_links">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li><a href="category.php?type=<?php echo $_SESSION['type'] ?>">All</a></li>
									<li><div class="products_dropdown text-right product_dropdown_filter">
									<div class="isotope_filter_text"><span>Loại sản phẩm</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
									<ul>
										<?php
										echo'<li class="item_sorting_btn" ><a href = "../controller/controlcategory.php?type='.$_SESSION['type'].'&page=1&filertype=false">All</a></a></li>';
											foreach($typep as $i){
												
												echo'<li class="item_sorting_btn" ><a href = "../controller/controlcategory.php?type='.$_SESSION['type'].'&page=1&filertype='.$i['type'].'">'.$i['type'].'</a></li>';
											}
										?>
										
									</ul>
								</div></li>
								
								</ul>
							</div>
							<div class="products_bar_side d-flex flex-row align-items-center justify-content-start ml-lg-auto">
								<div class="products_dropdown product_dropdown_sorting">
									<div class="isotope_sorting_text"><span>Default Sorting</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
									<ul>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>Default</li>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>Price</li>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>Name</li>
									</ul>
								</div>
								
								<div class="products_dropdown text-right product_dropdown_filter">
									<div class="isotope_filter_text"><span>Filter</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
									<ul>
										<li class="item_filter_btn" data-filter="*">All</li>
										<li class="item_filter_btn" data-filter=".lon"> >=200000</li>
										<li class="item_filter_btn" data-filter=".nho"> <200000 </li>
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
           </div>
<?php
	}
?>