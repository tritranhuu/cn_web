<?php
    function connectDB(){
        $hostname = 'localhost:3306';
        $username = 'root';
        $password = 'Tri200698';
        $dbname = "clothes_shop";                
        $conn = mysqli_connect($hostname, $username, $password,$dbname);
        return $conn;
    }

    function getCartByAccId($id, $conn){
        $items= array();
        $query = 'select * from cart where accID ='.$id;
        $sql = mysqli_query($conn, $query);
        while($res = mysqli_fetch_array($sql)){
            $optID = $res['optID'];
            $getItemQuery = 'select proID, proName, price, description, size, color from product_option NATURAL JOIN product where optID ='.$optID;
            $itemSql = mysqli_query($conn, $getItemQuery);
            $itemRes = mysqli_fetch_array($itemSql);
            $urlQuery = 'select url from img where proID='.$itemRes['proID'].' limit 1';
            $urlRes = mysqli_fetch_array(mysqli_query($conn, $urlQuery));
            $item = array(
                'optID' => $res['optID'],
                'proID' => $itemRes['proID'],
                'quantity' => $res['quantity'],
                'proName' => $itemRes['proName'],
                'price' => $itemRes['price'],
                'description' => $itemRes['description'],
                'size' => $itemRes['size'],
                'color' => $itemRes['color'],
                'url' => $urlRes['url']
            );
            array_push($items, $item);
        }
        return $items;       
    }

    function decCartItem($optID, $conn){
        $query="update cart set quantity=quantity-1 where accID='1' and optID=".$optID;
        mysqli_query($conn, $query);
    }

    function incCartItem($optID, $conn){
        $query="update cart set quantity=quantity+1 where accID='1' and optID=".$optID;
        mysqli_query($conn, $query);
    }

    function delCartItem($optID, $conn){
        $query="delete from cart where accID='1' and optID=".$optID;
        mysqli_query($conn, $query);
    }
?>
