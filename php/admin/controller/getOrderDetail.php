<?php

?>
<?php
include("../model/updateDatabase.php");
include('../model/getInfoFromDb.php');
?>
<?php
	if(isset($_POST['orderDetail'])){
		$orderID = $_POST['orderID'];
		echo "<tbody id='tableBody'>";
		$items = getOrderDetail($orderID);
		for($i=0; $i<sizeof($items); $i++){
?>		
                <tr>
                <td><?php echo $items[$i]['proID'];?></td>
                <td><?php echo $items[$i]['proName'];?></td>
                <td><?php echo $items[$i]['size'];?></td>
                <td><img src="../../<?php echo $items[$i]['color'];?>" style="height: 20px; width: 20px"></td>
                <td><?php echo $items[$i]['quantity'];?></td>
                </tr>
                                        
<?php
		}
?>
</tbody>
<?php
	}
?>