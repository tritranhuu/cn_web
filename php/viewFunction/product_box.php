<?php   
    function printProduct($proID,$url, $price,$proName,$gender,$arr){
       
?>  

    <div class="col-xl-4 col-md-6 grid-item <?php if($price<200000) echo "nho"; else echo "lon";?> ">   
                            <div class="product">   
                                <div class="product_image"><<?php echo 'a href="../controller/product_controller.php?action=index&page=1&product='.$proID.'"'; ?>><img src='<?php echo "../".$url;?>' style='border-top: 2px solid #dbdbdb; border-right: 2px solid #dbdbdb; border-left: 2px solid #dbdbdb; min-width: 100%; min-height: 100%; height: 460px; width: 346px'></a></div>   
                                <div class="product_content">   
                                    <div class="product_info d-flex flex-row align-items-start justify-content-start" style="height: 101px">  
                                        <div>   
                                            <div>   
                                                <div class="product_name"><<?php echo 'a href="../controller/product_controller.php?action=index&page=1&product='.$proID.'"'; ?>><?php echo $proName;?></a></div>   
                                                <div class="product_category">Mục <<?php echo 'a href="../controller/controlcategory.php?type='.$gender.'&page=1"';?>><?php if($gender=='M') echo'Nam';elseif($gender=='F') echo 'Nữ';else echo 'Trẻ Em';?></a></div>   
                                            </div>  
                                        </div>  
                                        <div class="ml-auto text-right">    
                                            <div class="rating_r rating_r_<?php if(sizeof($arr)==0) echo 0; else{ $sum =0;$c =0;foreach ($arr as $k){$sum += $k['point'];$c++;}echo $sum/$c;}?> home_item_rating text-dark"><i></i><i></i><i></i><i></i><i></i></div>    
                                            <div class="product_price text-right"><?php echo number_format((int)$price , 0, ',', '.');?><span>đ</span></div>    
                                        </div>  
                                    </div>  
                                    <div class="product_buttons">   
                                        <div class="text-right d-flex flex-row align-items-start justify-content-start">    
                                            <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center" onclick="window.location.href='product.php?product=<?php echo $proID;?>'">   
                                                <div>   
                                                    <div><img src="../images/icon_3.svg" class="svg" alt="" name = "">   
                                                    </div>  
                                                </div>  
                                            </div>  
                                            <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center addCartSmall" proID="<?php echo $proID;?>" data-toggle="modal" data-target="#sizecolorMPick">  
                                                <div>   
                                                    <div><img src="../images/cart.svg" class="svg" alt="" name = "cart" >    
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
}   
 ?> 
 <?php  
    function printProduct2($proID,$url, $price,$proName){   
?>  
    </form> 
    <div class="col-xl-12 col-sm-12 col-xs-12 col-md-6 grid-item  <?php if($price<20000) echo "nho"; else echo "lon";?> ">  
                            <div class="product ">  
                                <div class="product_image"><<?php echo 'a href="../controller/product_controller.php?action=index&page=1&product='.$proID.'"'; ?>><img src=<?php echo "../".$url;?> alt=""></a></div>   
                                <div class="product_content">   
                                    <div class="product_info d-flex flex-row align-items-start justify-content-start">  
                                        <div>   
                                            <div>   
                                                <div class="product_name"><<?php echo 'a href="../controller/product_controller.php?action=index&product='.$proID.'"'; ?>><?php echo $proName;?></a></div>  
                                                <div class="product_category">In <a href="category.html">Category</a></div> 
                                            </div>  
                                        </div>  
                                        <div class="ml-auto text-right">    
                                            <div class="rating_r rating_r_4 home_item_rating"><i class="fa fa-user-o"></i><i class="fa fa-user-o"></i><i class="fa fa-user-o"></i><i class="fa fa-user-o"></i></div>    
                                            <div class="product_price text-right" style="size: 16px"><?php echo $price;?></div>    
                                        </div>  
                                    </div>  
                                    <div class="product_buttons">   
                                        <div class="text-right d-flex flex-row align-items-start justify-content-start">    
                                            <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">   
                                                <div>   
                                                    <div><img src="../images/heart_2.svg" class="svg" alt="" name = ""> 
                                                        <div>+</div>    
                                                    </div>  
                                                </div>  
                                            </div>  
                                            <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">  
                                                <div>   
                                                    <div><img src="../images/cart.svg" class="svg" alt="" name = "cart">    
                                                        <div>+</div>    
                                                    </div>  
                                                </div>  
                                            </div>  
                                        </div>  
                                    </div>  
                                </div>  
                            </div>  
                        </div>  

   
    </form> 
<?php   
}   
 ?> 
 <?php  
    function printProduct3($proID,$url, $price,$proName){   
?>  
    </form> 
    <div class="col-md-3 col-sm-6 col-xs-6 "> 
                            <div class="product ">  
                                <div class="product_image"><<?php echo 'a href="../controller/product_controller.php?action=index&page=1&product='.$proID.'"'; ?>><img src=<?php echo "../".$url;?> alt="" style='border: 2px solid #dbdbdb; min-width: 100%; min-height: 100%;'></a></div>  
                                <div class="product_content">   
                                    <div class="product_info d-flex flex-row align-items-start justify-content-start">  
                                        <div>   
                                            <div>   
                                                <div class="product_name" ><<?php echo 'a style="font-size: 18px" href="../controller/product_controller.php?action=index&product='.$proID.'"'; ?>>Chi tiết</a></div>  
                                                
                                            </div>  
                                        </div>  
                                        <div class="ml-auto text-right">    
                                            <div class="rating_r rating_r_<?php if(sizeof($arr)==0) echo 0; else{ $sum =0;$c =0;foreach ($arr as $k){$sum += $k['point'];$c++;}echo $sum/$c;}?> home_item_rating"><i></i><i></i><i></i><i></i><i></i></div> 
                                            <div class="product_price text-right" style="font-size: 16px"><?php echo number_format((int)$price , 0, ',', '.');?>đ</div>    
                                        </div>  
                                    </div>  
                                    
                                </div>  
                            </div>  
                        </div>  

   
    </form> 
<?php   
}   
 ?> 