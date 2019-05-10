<?php
	function getNameById($accId){
		$conn = connectDB();
		$query = "select name from account where accId=".$accId;
		$sql = mysqli_query($conn, $query);
		$res = mysqli_fetch_array($sql);
		return $res['name'];	
	}

	function getProductInfoById($proId){
		$conn = connectDB();
		$query = "select * from product where proID=".$proId;
        $sql = mysqli_query($conn, $query);
        $res = mysqli_fetch_array($sql);
        $product = array(
            'proID' => $res['proID'],
            'proName' => $res['proName'],
            'type' => $res['type'],
            'material' => $res['material'],
            'import_price' => $res['import_price'],
            'price' => $res['price'],
            'description' => $res['description'],
            'gender' => $res['gender']
        );
        return $product;
	}

	function getProductImageById($proId){
		$conn = connectDB();
		$query = 'SELECT url FROM product NATURAL JOIN  img WHERE proID='.$proId;
		$sql = mysqli_query($conn, $query);
		$imamges = array();
		while ($res = mysqli_fetch_array($sql)) {
            array_push($imamges, $res['url']);
		}
		return $imamges;
	}

	function getColorByProID($proId){
		$conn = connectDB();
		$query = 'select color from product natural join  product_option where proID='.$proId.' group by color';
		$sql = mysqli_query($conn, $query);
		$colors = array();
		while ($res = mysqli_fetch_array($sql)) {
            array_push($colors, $res['color']);
		}
		return $colors;
	}

	function getAllVendorName(){
		$conn = connectDB();
		$query = 'select * from company';
		$sql = mysqli_query($conn, $query);
		$names = array();
		while ($res = mysqli_fetch_array($sql)) {
            array_push($names, $res['companyName']);
		}
		return $names;
	}

	function getStockById($proID){
		$conn = connectDB();
		$stocks = array();
		$query = 'select * from product_option where proID='.$proID;
		$sql = mysqli_query($conn, $query);
		while ($res = mysqli_fetch_array($sql)) {
            $stock = array('size' => $res['size'],
            			   'color' => $res['color'],
            			   'stock' => $res['stock_quantity']
            				);
            array_push($stocks, $stock);
		}
		return $stocks;
	}
?>