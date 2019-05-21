<?php 
include("getProduct.php");
?>
<?php
	function addOrder($accID, $name, $address, $phone, $message, $shipping, $payment, $conn){
		if(checkCart($accID, $conn)){
			$total = getCartTotal($accID, $conn);
			$date = date('d-m-Y ', time());
			$query = "insert into order_product (accID, status, name, address, phone, total, message, created, shipping, payment) values (".$accID.", N'Chờ xác nhận', '".$name."', '".$address."', '".$phone."', ".$total.", '".$message."', '".$date."', '".$shipping."', '".$payment."')";
			$sql = mysqli_query($conn, $query);
			
			$query_id = "select orderID from order_product where accID=".$accID." order by orderID desc limit 1";
			$orderID = mysqli_fetch_array(mysqli_query($conn, $query_id))['orderID'];

			$query_cart = "select optID, quantity from cart natural join product where accID=".$accID;
			$sql_cart = mysqli_query($conn, $query_cart);
			while($res_cart = mysqli_fetch_array($sql_cart)){
				addOrderItem($orderID, $res_cart['optID'], $res_cart['quantity'], $conn);
			}
			
			updateStock($accID, $conn);
			$query="delete from cart where accID=".$accID;
    	    mysqli_query($conn, $query);
		}
	}

	function addOrderItem($orderID, $optID, $quantity, $conn){
		$query = "insert into detail_order (orderID, optID, quantity) values (".$orderID.", ".$optID.", ".$quantity.")";
		mysqli_query($conn, $query);
	}

	function checkCart($accID, $conn){
		$query = "select quantity, stock_quantity, price, proName, size, color from cart natural join product_option natural join product where quantity>stock_quantity and accID=".$accID;
		$sql = mysqli_query($conn, $query);
		if(mysqli_num_rows($sql)==0){
			return 1;
		}
		$res = mysqli_fetch_array($sql);
		echo $res['proName']." với kích cỡ ".$res['size'];
		return 0;
	}

	function getCartTotal($accID, $conn){
		$query = "select sum(quantity*price) as total from cart natural join product_option natural join product where accID=".$accID;
		$sql = mysqli_query($conn, $query);
		return mysqli_fetch_array($sql)['total'];
	}

	function updateStock($accID, $conn){
		$query = "update cart natural join product_option set stock_quantity=stock_quantity-quantity where accID=".$accID;
		mysqli_query($conn, $query);
	}

	function getAllOrderByAccID($accID, $conn){
		$query = "select * from order_product where accID=".$accID;
		$orders = array();
		$sql = mysqli_query($conn, $query);
		while($res=mysqli_fetch_array($sql)){
			$order = array('orderID' => $res['orderID'],
							'name' => $res['name'],
							'address' => $res['address'],
							'phone' => $res['phone'],
							'total' => $res['total'],
							'created' => $res['created'],
							'shipping' => $res['shipping'],
							'status' => $res['status'], 
							);
			array_push($orders, $order);
		}
		return $orders;
	}



	function getItemsByOrderID($orderID, $accID, $conn){
		$query = "select proID, proName, size, color, price, quantity, min(url) as pic from detail_order natural join product_option natural join product natural join img where orderID=".$orderID." group by optID";
		$items = array();
		$sql = mysqli_query($conn, $query);
		while($res=mysqli_fetch_array($sql)){
			$item = array('proID' => $res['proID'], 
						  'proName' => $res['proName'], 
						  'size' => $res['size'], 
						  'color' => $res['color'], 
						  'price' => $res['price'], 
					   	  'quantity' => $res['quantity'], 
						  'url' => $res['pic'], 
						  );
			array_push($items, $item);
		}
		return $items;
	}	
?>