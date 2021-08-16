<?php
   require_once 'models/db_config.php';


	$name="";
	$err_name="";
    $email="";
    $err_email="";
    $message="";
    $err_message="";
	$hasError=false;
	
	
	if(isset($_POST["submit"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else{
		  $name= $_POST["name"];
	  }
      if (empty($_POST["email"])) {
         $hasError=true;
         $err_email = "Email is required";   }
		 
      else if(strpos($_POST["email"],"@.")){
          $hasError=true;
			     $err_email="Email must contain @ and .";
		     }

			 else {
                 $email =$_POST["email"];
             }

       if(empty($_POST["message"])){
		  $hasError=true;
		  $err_message="Message Required";
	  }
	  else{
		  $message= $_POST["message"];
	  }
		if(!$hasError){

			$rs=insertContact($name,$email,$message);
            if($rs===true){
                header("location: index.php");
            }
            $err_db=$rs;
			}

		}
	function insertContact($name,$email,$message){
        $query="insert into contact values (NULL,'$name','$email','$message')";
        return execute($query);
    }

?>