<?php
session_start();
    $ctr_name = 'index';
    require('../database/connectDB.php');
    require('../database/getProduct.php');
    $conn = connectDB();
    function toManPage($data,$conn){
        if($_SESSION['ftype']!="false"){
        $_SESSION[$_SESSION['type']] = getListProduct2($conn,$_SESSION['type'],1,$_SESSION['ftype']);
        }
        else $_SESSION[$_SESSION['type']] = getListProduct($conn,$_SESSION['type'],1);
        $_SESSION['max'] = sizeof($_SESSION[$_SESSION['type']] );
        header('Location:../php/category.php?type='.$_SESSION['type'].'&filertype='.$_SESSION['ftype']."&page=".$_SESSION['page']);
    }
    $type='M';
    $_SESSION['page']=1;
    $filertype = 'false';
    if(isset($_REQUEST['type'])){
        $_SESSION['type'] = $_REQUEST['type'];
        $_SESSION['page'] = $_REQUEST['page'];
        $_SESSION['ftype'] = $_REQUEST['filertype'];
    }
    toManPage($_REQUEST,$conn);
    
?>