<?php 
include("../database/connectDB.php");
include("../database/dbCart.php");
include("../database/dbProduct.php");
?>
<?php
    session_start();
    $conn = connectDB();
    if(isset($_POST['dec'])){
        $id = $_POST['dec'];
        decCartItem($id, $conn);
    }
    else if(isset($_POST['inc'])){
        $id = $_POST['inc'];
        incCartItem($id, $conn);
    }
    else if(isset($_POST['del'])){
        $id = $_POST['del'];
        delCartItem($id, $conn);
    }
    else if(isset($_POST['drop'])){
        delCart(1, $conn);
    }
    else if(isset($_POST['add'])){
        $accID = $_POST['accID'];
        $proID = $_POST['proID'];
        $size = $_POST['size'];
        $color = $_POST['color'];
        $optID = getOptionIdByProIDSizeColor($proID, $size, $color, $conn);
        addToCart($accID, $optID, $conn);
    }
?>