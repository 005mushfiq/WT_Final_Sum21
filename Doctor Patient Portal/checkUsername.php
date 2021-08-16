<?php
	include 'controllers/signup_controller.php';
	$username = $_GET["username"];
	$user = checkUsername($username);
	if($user){
		echo "invalid";
	}
	else echo "valid";
	

?>