<?php
session_start();
    $ctr_name = 'index';
    require('../database/connectDB.php');
    require('../database/getProduct.php');
    $conn = connectDB();
    function toManPage($data,$conn){
        $_SESSION[$_SESSION['type']] = getListProduct($conn,$_SESSION['type']);
        $_SESSION['max'] = sizeof($_SESSION[$_SESSION['type']] );
        header('Location:../php/category.php');
    }
    function toCartProduct(){
    }
    function toHeartProduct(){
    }
    if(isset($_REQUEST['type'])){
        $_SESSION['type'] = $_REQUEST['type'];
        $_SESSION['page'] = $_REQUEST['page'];
    }
    toManPage($_REQUEST,$conn);
    
?>
