<?php
	function addOrder($accID, $name, $address, $phone, $message, $shipping, $payment, $conn){
		if(checkCart($accID, $conn)){
			$total = getCartTotal($accID, $conn);
			
			$query = "insert into order_product (accID, status, name, address, phone, total, message, created, shipping, payment) values (".$accID.", 'fresh', '".$name."', '".$address."', '".$phone."', ".$total.", '".$message."', '', '".$shipping."', '".$payment."')";
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
		echo $query;
		mysqli_query($conn, $query);
	}

	function checkCart($accID, $conn){
		$query = "select quantity, stock_quantity, price, proName from cart natural join product_option natural join product where quantity>stock_quantity and accID=".$accID;
		$sql = mysqli_query($conn, $query);
		if(mysqli_num_rows($sql)==0){
			return 1;
		}
		$res = mysqli_fetch_array($sql);
		echo $res['proName'];
		return 0;
	}

	function getCartTotal($accID, $conn){
		$query = "select sum(quantity*price) as total from cart natural join product_option natural join product where accID=1";
		$sql = mysqli_query($conn, $query);
		return mysqli_fetch_array($sql)['total'];
	}

	function updateStock($accID, $conn){
		$query = "update cart natural join product_option set stock_quantity=stock_quantity-quantity where accID=".$accID;
		mysqli_query($conn, $query);
	}	
?>