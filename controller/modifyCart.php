<?php include("../database/dbCart.php")?>
<?php
    session_start();
    $conn = connectDB();
    if(isset($_POST['dec'])){
        $id = $_POST['dec'];;
        decCartItem($id, $conn);
    }
    else if(isset($_POST['inc'])){
        $id = $_POST['inc'];;
        incCartItem($id, $conn);
    }
    else if(isset($_POST['del'])){
        $id = $_POST['del'];;
        delCartItem($id, $conn);
    }
?>