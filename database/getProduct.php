<?php
    
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
    function getInfoProduct($conn,$id){
        $items= array();
        $query = 'select * from product where proID=' .$id;
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
        return $items[0];      
    }
    function getImageProduct($conn,$id){
        $query = 'select url from img where proID=' .$id;
        $sql = mysqli_query($conn, $query);
        $items= array();
        while($res = mysqli_fetch_array($sql)){

            array_push($items, $res['url']);
        }
        return $items;
    }
    function getCommentProduct($conn,$id){
        $items= array();
        $query = 'select * from comment_product where proID=' .$id;
        $sql = mysqli_query($conn, $query);
        
        while($res = mysqli_fetch_array($sql)){
            $item = array(
                'proID' => $res['proID'],
                'accID' => $res['accID'],
                'content' => $res['content'],
                'created' => $res['created']
            );
            array_push($items, $item);
        }
        return $items;    
    }
  
?>
