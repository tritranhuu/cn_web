<?php
session_start();
    $ctr_name = 'index';
    require('../database/connectDB.php');
    require('../database/getProduct.php');
    $conn = connectDB();
    function toDetailProduct($data,$conn){
        $pro =  getInfoProduct($conn,$data['product']);
        $proImgae = getImageProduct($conn,$data['product']);
        $proOpt = getOptionProduct($conn,$data['product']);
        $proComment = getCommentProduct($conn,$data['product']);
        $_SESSION['product'] = $pro;
        $_SESSION['product_image'] = $proImgae;
        $_SESSION['product_comment'] = $proComment;
        $_SESSION['product_option'] = $proOpt;
        header('Location:../php/product.php');
    }
    function toCartProduct(){
    }
    function toHeartProduct(){
    }
    if(isset($_REQUEST['action'])){
        $_SESSION['ctr_name'] =$ctr_name;
        $_SESSION['sub_menu'] = $action = $_REQUEST['action'];
        $action = $_REQUEST['action'];
    }else{
        $action = 'index';
    }
    switch ($action){
        case 'index':
            toDetailProduct($_REQUEST,$conn);
            break;
        case 'addtocard':
            toCartProduct($_REQUEST);
        default:
            toDetailProduct($_REQUEST);
            break;
    }
?>
