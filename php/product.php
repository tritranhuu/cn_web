<?php
    function printProduct($proID,$url, $price,$proName){
?>
    </form>
    <div class="col-xl-4 col-md-6">
                            <div class="product">
                                <div class="product_image"><img src=<?php echo "../".$url;?> alt=""></div>
                                <div class="product_content">
                                    <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div>
                                                <div class="product_name"><a href="main.php"><?php echo $proName;?></a></div>
                                                <div class="product_category">In <a href="category.html">Category</a></div>
                                            </div>
                                        </div>
                                        <div class="ml-auto text-right">
                                            <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="product_price text-right"><?php echo $price;?></div>
                                        </div>
                                    </div>
                                    <div class="product_buttons">
                                        <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                            <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                                <div>
                                                    <div><img src="images/heart_2.svg" class="svg" alt="" name = "">
                                                        <div>+</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                <div>
                                                    <div><img src="images/cart.svg" class="svg" alt="" name = "cart">
                                                        <div>+</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

    <?php
       ;
    ?>
    </form>
<?php
}

?>