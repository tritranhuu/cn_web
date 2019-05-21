<?php
    
    function getProduct($conn){
        $items= array();
        $query = 'select * from product order by proID desc ';
        $sql = mysqli_query($conn, $query);
        while($res = mysqli_fetch_array($sql)){
            $urlQuery = 'select url from img where proID='.$res['proID'].' limit 1';
            $urlRes = mysqli_fetch_array(mysqli_query($conn, $urlQuery));
            $item = array(
                'proID' => $res['proID'],
                'proName' => $res['proName'],
                'price' => $res['price'],
                'url' => $urlRes['url'],
                'gender' => $res['gender'],
                'type' => $res['type']
            );
            array_push($items, $item);
        }
        return $items;       
    }

    function getProductRand($conn){
        $items= array();
        $query = 'select * from product order by RAND() limit 102';
        $sql = mysqli_query($conn, $query);
        while($res = mysqli_fetch_array($sql)){
            $urlQuery = 'select url from img where proID='.$res['proID'].' limit 1';
            $urlRes = mysqli_fetch_array(mysqli_query($conn, $urlQuery));
            $item = array(
                'proID' => $res['proID'],
                'proName' => $res['proName'],
                'price' => $res['price'],
                'url' => $urlRes['url'],
                'gender' => $res['gender'],
                'type' => $res['type']
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
                'description' => $res['description'],
                'gender' => $res['gender'],
                'material' => $res['material'],
                'url' => $urlRes['url']
            );
            array_push($items, $item);
        }
        return $items[0];      
    }
    function getOptionProduct($conn,$id){
        $items= array();
        $query = 'select * from product_option where proID=' .$id;
        $sql = mysqli_query($conn, $query);
        while($res = mysqli_fetch_array($sql)){
            $item = array(
                'size' => $res['size'],
                'color' => $res['color'],
                'stock_quantity' => $res['stock_quantity']
            );
            array_push($items, $item);
        }
        return $items;      
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
    function getListProduct($conn,$gender,$page){
        $items= array();
        $query = "select * from product where gender='" .$gender."'";
        $sql = mysqli_query($conn, $query);
        while($res = mysqli_fetch_array($sql)){
            $urlQuery = 'select url from img where proID='.$res['proID'].' limit 1';
            $urlRes = mysqli_fetch_array(mysqli_query($conn, $urlQuery));
            $urlQuery2 = 'select distinct * from product_option where proID='.$res['proID'].' limit 1';
            
            $item = array(
                'proID' => $res['proID'],
                'proName' => $res['proName'],
                'price' => $res['price'],
                'url' => $urlRes['url'],
                'size' => $urlQuery2,
                'type' => $res['type']
            );
            array_push($items, $item);
        }
        return $items;         
    }
    function getListProduct2($conn,$gender,$page,$type){
        $items= array();
        $query = "select * from product where gender='" .$gender."'and type ='".$type."'";
        $sql = mysqli_query($conn, $query);
        while($res = mysqli_fetch_array($sql)){
            $urlQuery = 'select url from img where proID='.$res['proID'].' limit 1';
            $urlRes = mysqli_fetch_array(mysqli_query($conn, $urlQuery));
            $urlQuery2 = 'select distinct * from product_option where proID='.$res['proID'].' limit 1';
            
            $item = array(
                'proID' => $res['proID'],
                'proName' => $res['proName'],
                'price' => $res['price'],
                'url' => $urlRes['url'],
                'size' => $urlQuery2,
                'type' => $res['type']
            );
            array_push($items, $item);
        }
        return $items;         
    }
    function getCmtandRate($conn,$id){
        $items= array();
        $query = 'select * from comment_product where proID='.$id.' order by created desc';
        $sql = mysqli_query($conn, $query);
        while($res = mysqli_fetch_array($sql)){
            $urlQuery = 'select * from account where accID='.$res['accID'].' limit 1';
            $urlRes = mysqli_fetch_array(mysqli_query($conn, $urlQuery));
            $urlQuery2 = 'select proName from product where proID='.$res['proID'].' limit 1';
            $urlRes2 = mysqli_fetch_array(mysqli_query($conn, $urlQuery2));
            $urlQuery3 = 'select point from rate_product where proID='.$res['proID'].' and '.'accID='.$res['accID'];
            $urlRes3 = mysqli_fetch_array(mysqli_query($conn, $urlQuery3));
            $item = array(
                
                'proName' => $urlRes2['proName'],
                'content' => $res['content'],
                'created' => $res['created'],
                'username' => $urlRes['username'],
                'point' =>$urlRes3['point']
            );
            array_push($items, $item);
        }
        return $items;   
    }
    function getListType($conn,$gender){
        $items= array();
        $query = "select distinct type from product where gender='" .$gender."'" ;
        $sql = mysqli_query($conn, $query);
        while($res = mysqli_fetch_array($sql)){
            $item = array(
                'type' => $res['type']
            );
            array_push($items, $item);
        }
        return $items;
    }

    function getProductBySignature($conn, $sig){
        $items= array();
        $query = "select * from product where proName like '%".$sig."%' or description like '%".$sig."%' or type like '%".$sig."%' order by RAND()";
        $sql = mysqli_query($conn, $query);
        while($res = mysqli_fetch_array($sql)){
            $urlQuery = 'select url from img where proID='.$res['proID'].' limit 1';
            $urlRes = mysqli_fetch_array(mysqli_query($conn, $urlQuery));
            $item = array(
                'proID' => $res['proID'],
                'proName' => $res['proName'],
                'price' => $res['price'],
                'url' => $urlRes['url'],
                'gender' => $res['gender'],
                'type' => $res['type']
            );
            array_push($items, $item);
        }
        return $items;
    }

?>
