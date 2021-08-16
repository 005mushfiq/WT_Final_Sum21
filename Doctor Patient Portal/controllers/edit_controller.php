<?php
session_start();
    include 'models/db_config.php';
    
    $username="";
    $err_username="";
	
    $password="";
    $err_password="";
	
	$id=$_COOKIE["user"];
	
	
	
 if(isset($_POST["update"])){
       if(empty($_POST["usernameEdit"])){
        $hasError=true;
        $err_username="Username Required";
    }
      else{
        $username=$_POST["usernameEdit"];
    }
	if(empty($_POST["passwordEdit"])){
        $hasError=true;
        $err_password="Password Required";
    }
      else{
        $password=$_POST["passwordEdit"];
    }
      if(!$hasError){
        $rs=editAdmin($username,$password,$id);
		//var_dump($rs);
        if ($rs===true){
            header("Location: adminProfile.php");
        }
		$err_db = $rs;
      }
 }
	
	function editAdmin($username,$password,$id){
		$query="update admin set username='$username', password='$password' where id='$id'";
		return execute($query);
	}
	
?>



