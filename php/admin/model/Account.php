<?php
    function updateAccount($accID, $name,$pass, $address, $phone, $gender, $conn){
		$query = "UPDATE account SET gender='$gender', name=N'$name',password=N'$pass' address=N'$address', phone='$phone' WHERE accID=".$accID;
		mysqli_query($conn, $query);
	}
    function getAllAcc($conn){
        $items= array();
        $query = 'select * from account ';
        $sql = mysqli_query($conn, $query);
        while($res = mysqli_fetch_array($sql)){
            $item = array(
                'accID' => $res['accID'],
                'username' => $res['username'],
                'password'=> $res['password'],
                'name' => $res['name'],
                'address' => $res['address'],
                'phone' => $res['phone'],
                'created' => $res['created'],
                'admin' => $res['admin'],
            );
            array_push($items, $item);
        }
        return $items; 
    }
    function getAccByID($conn,$id){
        $items= array();
        $query = 'select * from account where accID = '.$id.' limit 1';
        $sql = mysqli_query($conn, $query);
        while($res = mysqli_fetch_array($sql)){
            $item = array(
                'username' => $res['username'],
                'gender' => $res['gender'],
                'password'=> $res['password'],
                'name' => $res['name'],
                'address' => $res['address'],
                'phone' => $res['phone'],
                'created' => $res['created'],
                'admin' => $res['admin'],
                'email' =>$res['email']
            );
            array_push($items, $item);
        }
        return $items; 
    }


?>