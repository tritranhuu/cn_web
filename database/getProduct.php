<?php
    function connectDB(){
        $hostname = 'localhost:3306';
        $username = 'root';
        $password = '12345';
        $dbname = "clothes_shop";                
        $conn = mysqli_connect($hostname, $username, $password,$dbname);
        return $conn;
    }

    function getProduct($conn){
        $items= array();
        $query = 'select * from product';
        $sql = mysqli_query($conn, $query);
        while($res = mysqli_fetch_array($sql)){
            $urlQuery = 'select url from img where proID='.$res['proID'].' limit 1';
            $urlRes = mysqli_fetch_array(mysqli_query($conn, $urlQuery));
            $item = array(
                'proID' => $res['proID'],
                'proName' => $res['proName'],
                'price' => $res['price'],
                'url' => $urlRes['url']
            );
            array_push($items, $item);
        }
        return $items;       
    }

  
?>
