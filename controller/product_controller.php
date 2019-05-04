<?php
session_start();
    $ctr_name = 'index';
    require('../database/connectDB.php');
    require('../database/getProduct.php');
    $conn = connectDB();
    function toDetailProduct($data,$conn){
        header('Location:../php/product.php?product='.$data['product'] );
    }
    function toCartProduct(){
    }
    function toHeartProduct(){
    }
    $_SESSION['pagecmt']= 1;
    if(isset($_REQUEST['action'])){
        $_SESSION['ctr_name'] =$ctr_name;
        $_SESSION['sub_menu'] = $action = $_REQUEST['action'];
        $action = $_REQUEST['action'];
        $_SESSION['pagecmt']= $_REQUEST['page'];
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
