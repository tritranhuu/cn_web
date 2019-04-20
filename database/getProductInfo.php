<?php
    function connectDB(){
        $hostname = 'localhost:3306';
        $username = 'root';
        $password = 'Tri200698';
        $dbname = "clothes_shop";                
        $conn = mysqli_connect($hostname, $username, $password,$dbname);
        return $conn;
    }

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
?>

<?php

?>