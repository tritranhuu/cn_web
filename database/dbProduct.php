<?php  
    function getProductById($id, $conn){
        $query = 'select * from product where proID ='.$id;
        $sql = mysqli_query($conn, $query);
        $res = mysqli_fetch_array($sql);
        $product = array(
            'proID' => $res['proID'],
            'proName' => $res['proName'],
            'price' => $res['price'],
            'description' => $res['description'],
            'gender' => $res['gender']
        );
        return $product;
    }

    function getProductImgById($proID, $conn){
        $query = 'select '
    }

    function getOptionIdByProIDSizeColor($proID, $size, $color, $conn){
        $query = "select optID from product_option where proID=".$proID." and size='".$size."' and color='".$color."'";
        echo $query;
        $sql = mysqli_query($conn, $query);
        if(mysqli_num_rows($sql)>0){
            $res = mysqli_fetch_array($sql);
            return $res['optID'];
        }
        else{
            return -1;
        }
    }
?>

<?php

?>