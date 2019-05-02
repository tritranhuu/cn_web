<?php 
include("../database/connectDB.php");
include("../database/dbCart.php");
include("../database/dbProduct.php");
?>
<?php
session_start();
$conn = connectDB();
if(isset($_SESSION['accID'])){
    $accID = $_SESSION['accID'];
    if(isset($_POST['dec'])){
        $id = $_POST['dec'];
        decCartItem($accID, $id, $conn);
    }
    else if(isset($_POST['inc'])){
        $id = $_POST['inc'];
        incCartItem($accID, $id, $conn);
    }
    else if(isset($_POST['del'])){
        $id = $_POST['del'];
        delCartItem($accID, $id, $conn);
    }
    else if(isset($_POST['drop'])){
        delCart($accID, $conn);
    }
    else if(isset($_POST['add'])){
        $proID = $_POST['proID'];
        $size = $_POST['size'];
        $color = $_POST['color'];
        $optID = getOptionIdByProIDSizeColor($proID, $size, $color, $conn);
        addToCart($accID, $optID, $conn);
    }
}
else{
    echo "no_login";
}
?>