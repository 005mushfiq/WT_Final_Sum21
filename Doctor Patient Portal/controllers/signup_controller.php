<?php

    require_once 'models/db_config.php';
    
    $name="";
    $err_name="";

    $username="";
    $err_username="";

    $password="";
    $err_password="";
	
	$dob="";
	$err_dob="";
	
	$bGroup="";
	$err_bGroup="";
	
	$email="";
    $err_email="";
	
	$phone="";
	$err_phone="";
	
	$usertype="";
	$err_usertype="";

    $err_db="";

    $hasError=false;
	
	$array= array("A+","A-","B+","B-","AB+","AB-","O+","O-");
	$arrayUser= array("Doctor","Patient","Blood Donor");

    if(isset($_POST["signup"])){
		if(empty($_POST["usertype"])){
            $hasError=true;
            $err_usertype="Type Required";
        }
        else{
            $usertype=$_POST["usertype"];
        }
        if(empty($_POST["name"])){
            $hasError=true;
            $err_name="Name Required";
        }
        else{
            $name=$_POST["name"];
        }

        if(empty($_POST["username"])){
            $hasError=true;
            $err_username="Username Required";
        }
	    else if (strlen($_POST["username"]) <= 3) {
            $hasError=true;
            $err_username="Must be in <3 character";
         }
        else if(strpos($_POST["username"]," ")){
            $hasError=true;
            $err_username="Username should not contain space";
		}
        else{
            $username=$_POST["username"];
        }

        if(empty($_POST["email"])){
            $hasError=true;
            $err_email="Email Required";
        }
		else if(!strpos($_POST["email"],"@")){
            $hasError=true;
		    $err_email="Email must contain @";
		    }
		else if(!strpos($_POST["email"],".")){
            $hasError=true;
		    $err_email="Email must contain . (dot)";
		    }
        else{
            $email=$_POST["email"];
        }

        if(empty($_POST["password"])){
            $hasError=true;
            $err_password="Password Required";
        }
		else if(strlen($_POST["password"])<8){
            $hasError=true;
		    $err_password="Password must be at least 8 Charachter";
		 }
		else if(ctype_upper($_POST["password"])){
            $hasError=true;
		    $err_password="Password should contain UpperCase values";
		    }
		else if(ctype_lower($_POST["password"])){
            $hasError=true;
		    $err_password="Password should contain LowerCase values";
		    }
		else if(strpos($_POST["password"]," ")){
            $hasError=true;
			$err_password="Password should not contain white space";
		    }
        else{
            $password=$_POST["password"];
        }
		if(empty($_POST["dob"])){
            $hasError=true;
            $err_dob="Birth Date Required";
        }
        else{
            $dob=$_POST["dob"];
        }
		if(empty($_POST["bGroup"])){
            $hasError=true;
            $err_bGroup="Blood Group Required";
        }
        else{
            $bGroup=$_POST["bGroup"];
        }
		if(empty($_POST["phone"])){
            $hasError=true;
            $err_phone="Phone Required";
        }
        else{
            $phone=$_POST["phone"];
        }

        if(!$hasError){
			if($usertype=="Doctor"){
			$rs=insertUserDoctor($name,$username,$password,$dob,$bGroup,$email,$phone);
            if($rs===true){
                header("location: index.php");
            }
            $err_db=$rs;
			}
			else if($usertype=="Patient"){
			$rs=insertUserPatient($name,$username,$password,$dob,$bGroup,$email,$phone);
            if($rs===true){
                header("location: index.php");
            }
            $err_db=$rs;
			}
			else if($usertype=="Blood Donor"){
			$rs=insertUserDonor($name,$username,$password,$dob,$bGroup,$email,$phone);
            if($rs===true){
                header("location: index.php");
            }
            $err_db=$rs;
			}
            
        }
    }
    
    function insertUserDoctor($name,$username,$password,$dob,$bGroup,$email,$phone){
        $query="insert into doctor values (NULL,'$name','$username','$password','$dob','$bGroup','$email','$phone')";
        return execute($query);
    }
	function insertUserPatient($name,$username,$password,$dob,$bGroup,$email,$phone){
        $query="insert into patient values (NULL,'$name','$username','$password','$dob','$bGroup','$email','$phone')";
        return execute($query);
    }
	function insertUserDonor($name,$username,$password,$dob,$bGroup,$email,$phone){
        $query="insert into donor values (NULL,'$name','$username','$password','$dob','$bGroup','$email','$phone')";
        return execute($query);
    }
	
	function checkUsername($username){
		$query = "select name from patient where username='$username'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}
?>