<?php
if(isset($_POST['logout'])){
	session_start();
	unset($_SESSION["accID"]);
	unset($_SESSION["admin"]);
}
?>