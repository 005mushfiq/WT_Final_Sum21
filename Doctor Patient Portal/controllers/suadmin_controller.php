<?php

    include 'models/db_config.php';
    
    $username="";
    $err_username="";
	
    $password="";
    $err_password="";

    $err_db="";
	$msg="";

    $hasError=false;
	

    
    if (isset($_POST["add"])){
        if(empty($_POST["username"])){
            $hasError=true;
            $err_username="User Name Required";
        }
        else{
            $username=$_POST["username"];
        }

        if(empty($_POST["password"])){
            $hasError=true;
            $err_password="Password Required";
        }
        else{
            $password=$_POST["password"];
        }

        if(!$hasError){
			$rs=insertAdmin($username,$password);
            if($rs===true){
               header("Location: adminmsg.php");
            }
            $err_db=$rs;
			}
			
		}
		
	function insertAdmin($username,$password){
        $query="insert into admin values (NULL,'$username','$password')";
        return execute($query);
    }

	
?>



