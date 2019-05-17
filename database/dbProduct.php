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
    function getOptionIdByProIDSizeColor($proID, $size, $color, $conn){
        $query = "select optID from product_option where proID=".$proID." and size='".$size."' and color='".$color."'";
        $sql = mysqli_query($conn, $query);
        if(mysqli_num_rows($sql)>0){
            $res = mysqli_fetch_array($sql);
            return $res['optID'];
        }
        else{
            return -1;
        }
    }  
    function getLatestProduct($conn){
        $query = 'select * from product order by proID desc limit 1';
        $sql = mysqli_query($conn, $query);
        $res = mysqli_fetch_array($sql);
        $img = getPicByProID($res['proID'], $conn);
        $rate = getProductScore($res['proID'], $conn);
        $item = array(
                'proID' => $res['proID'],
                'proName' => $res['proName'],
                'price' => $res['price'],
                'url0' => $img[0],
                'url1' => $img[1],
                'url2' => $img[2],
                'gender' => $res['gender'],
                'rate' => (int)$rate
            );
        return $item;
    }

    function getMostCommentedProduct($conn){
        $queryID = 'select proID, count(*) as total from comment_product group by proID order by total desc limit 1';
        $sqlID = mysqli_query($conn, $queryID);
        $resID = mysqli_fetch_array($sqlID);
        $proID = $resID['proID'];
        $query = 'select * from product where proID='.$proID;
        $sql = mysqli_query($conn, $query);
        $res = mysqli_fetch_array($sql);
        $img = getPicByProID($proID, $conn);
        $rate = getProductScore($proID, $conn);
        $item = array(
                'proID' => $res['proID'],
                'proName' => $res['proName'],
                'price' => $res['price'],
                'url0' => $img[0],
                'url1' => $img[1],
                'url2' => $img[2],
                'gender' => $res['gender'],
                'rate' => (int)$rate
            );
        return $item;
    }

    function getHighestPriceProduct($conn){
        $query='select * from product order by price desc limit 1';
        $sql = mysqli_query($conn, $query);
        $res = mysqli_fetch_array($sql);
        $img = getPicByProID($res['proID'], $conn);
        $rate = getProductScore($res['proID'], $conn);
        $item = array(
                'proID' => $res['proID'],
                'proName' => $res['proName'],
                'price' => $res['price'],
                'url0' => $img[0],
                'url1' => $img[1],
                'url2' => $img[2],
                'gender' => $res['gender'],
                'rate' => (int)$rate
            );
        return $item;
    }

    function getHighestScoreProduct($conn){
        $queryID = 'select proID, avg(point) as rate from rate_product group by proID order by rate desc limit 1';
        $sqlID = mysqli_query($conn, $queryID);
        $resID = mysqli_fetch_array($sqlID);
        $proID = $resID['proID'];
        $query = 'select * from product where proID='.$proID;
        $sql = mysqli_query($conn, $query);
        $res = mysqli_fetch_array($sql);
        $img = getPicByProID($proID, $conn);
        $rate = getProductScore($proID, $conn);
        $item = array(
                'proID' => $res['proID'],
                'proName' => $res['proName'],
                'price' => $res['price'],
                'url0' => $img[0],
                'url1' => $img[1],
                'url2' => $img[2],
                'gender' => $res['gender'],
                'rate' => (int)$rate
            );
        return $item;
    }

    function getPicByProID($proID, $conn){
        $query = 'select url from img where proID='.$proID.' limit 3';
        $sql = mysqli_query($conn, $query);
        $img = array();
        while ($res = mysqli_fetch_array($sql)) {
            array_push($img, $res['url']);
        }
        return $img;
    }

    function getProductScore($proID, $conn){
        $query = 'select avg(point) as rate from rate_product where proID='.$proID;
        $sql = mysqli_query($conn, $query);
        $res = mysqli_fetch_array($sql);
        return $res['rate'];
    }
?>

<?php

?>