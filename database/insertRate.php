
<?php
        session_start();
        include("../database/connectDB.php");
        if(isset($_POST['input'])){
        $dat = date('d-m-Y ', time());
        $content =$_POST['input'];
        $accID = $_SESSION['accID'];
        $proID = $_POST['proID'];
        $rate = $_POST['rating'];
        $conn = connectDB();
        $query = 'insert into rate_product(accID, proID, point) values ('.$accID.",".$proID.",".$rate.")";
        $query2 = "insert into comment_product(accID, proID, content,created) values (".$accID.",".$proID.",'".$content."','".$dat."')";
        echo $query;
        echo $query2;
        mysqli_query($conn,$query);
        mysqli_query($conn,$query2);
       
        }
	

	
?>
