<?php
session_start();
    include 'models/db_config.php';
	
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
	
	$department="";
	$err_department="";
	
	$hospital="";
	$err_hospital="";
	
	$usertype="";
	$err_usertype="";
	
	$date="";
	$err_date="";
	
	$time="";
	$err_time="";
	
	$pname="";
	$err_pname="";
	
	$nopatient="";
	$err_nopatient="";

    $err_db="";	

    $hasError=false;
	$array= array("A+","A-","B+","B-","AB+","AB-","O+","O-");
	$arrayUser= array("Admin","Doctor","Patient","Blood Donor");

    
    if (isset($_POST["login"])){
		if(empty($_POST["usertype"])){
            $hasError=true;
            $err_usertype="Type Required";
        }
        else{
            $usertype=$_POST["usertype"];
        }
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
			if($usertype=="Admin"){
				if(authenticateUserAdmin($username,$password)){
					$_SESSION["loggedAdmin"] = $_POST["username"];					
			header("Location: adminProfile.php");
		    }
		    $err_db="Username password invalid";
		    }
			else if($usertype=="Doctor"){
				 if(authenticateUserDoctor($username,$password)){
					$_SESSION["loggedDoctor"] = $_POST["username"]; 
			header("Location: doctorProfile.php");
		    }
		    $err_db="Username password invalid";
		    }
			else if($usertype=="Patient"){
				 if(authenticateUserPatient($username,$password)){
					 $_SESSION["loggedPatient"] = $_POST["username"];
			header("Location: patientProfile.php");
		    }
		    $err_db="Username password invalid";
		    }
			else if($usertype=="Blood Donor"){
				 if(authenticateUserDonor($username,$password)){
					 $_SESSION["loggedDonor"] = $_POST["username"];
			header("Location: donorProfile.php");
		    }
		    $err_db="Username password invalid";
		    }
		}
	}
	
else if(isset($_POST["updateAdmin"])){
	if(empty($_POST["passwordEdit"])){
        $hasError=true;
        $err_password="Password Required";
    }
      else{
        $password=$_POST["passwordEdit"];
    }
      if(!$hasError){
		  $id=$_POST["id"];
        $rs=editAdmin($username,$password,$id);
		//var_dump($rs);
        if ($rs===true){
            header("Location: adminProfile.php");
        }
		$err_db = $rs;
      }
 }
 
 else if(isset($_POST["updateDoctor"])){
	if(empty($_POST["name"])){
            $hasError=true;
            $err_name="Name Required";
        }
        else{
            $name=$_POST["name"];
        }

        if(empty($_POST["email"])){
            $hasError=true;
            $err_email="Email Required";
        }
		
        else{
            $email=$_POST["email"];
        }

        if(empty($_POST["password"])){
            $hasError=true;
            $err_password="Password Required";
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
		if(empty($_POST["department"])){
            $hasError=true;
            $err_department="Department Required";
        }
        else{
            $department=$_POST["department"];
        }
		if(empty($_POST["hospital"])){
            $hasError=true;
            $err_hospital="Hospital Required";
        }
        else{
            $hospital=$_POST["hospital"];
        }
      if(!$hasError){
		  $id=$_POST["id"];
        $rs=editDoctor($id,$name,$username,$password,$dob,$bGroup,$email,$phone,$department,$hospital);
		//var_dump($rs);
        if ($rs===true){
            header("Location: doctorProfile.php");
        }
		$err_db = $rs;
      }
 }
 
 
 else if(isset($_POST["updatePatient"])){
	if(empty($_POST["name"])){
            $hasError=true;
            $err_name="Name Required";
        }
        else{
            $name=$_POST["name"];
        }

        if(empty($_POST["email"])){
            $hasError=true;
            $err_email="Email Required";
        }
		
        else{
            $email=$_POST["email"];
        }

        if(empty($_POST["password"])){
            $hasError=true;
            $err_password="Password Required";
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
		  $id=$_POST["id"];
        $rs=editPatient($id,$name,$username,$password,$dob,$bGroup,$email,$phone);
		//var_dump($rs);
        if ($rs===true){
            header("Location: patientProfile.php");
        }
		$err_db = $rs;
      }
 }
 
 else if(isset($_POST["updateDonor"])){
	if(empty($_POST["name"])){
            $hasError=true;
            $err_name="Name Required";
        }
        else{
            $name=$_POST["name"];
        }

        if(empty($_POST["email"])){
            $hasError=true;
            $err_email="Email Required";
        }
		
        else{
            $email=$_POST["email"];
        }

        if(empty($_POST["password"])){
            $hasError=true;
            $err_password="Password Required";
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
		  $id=$_POST["id"];
		  
        $rs=editDonor($id,$name,$username,$password,$dob,$bGroup,$email,$phone);
		//var_dump($rs);
        if ($rs===true){
            header("Location: donorProfile.php");
        }
		$err_db = $rs;
      }
 }
 else if(isset($_POST["accept"])){
		$id=$_POST["id"];
		doctorAccept($id);
        header("Location: doctorRequest.php");
 }
 else if(isset($_POST["reject"])){
		$id=$_POST["id"];
		doctorReject($id);
        header("Location: doctorRequest.php");
 }
 
 //delete Doctors
 else if(isset($_POST["deletedoctor"])){
		$id=$_POST["id"];
		doctorDelete($id);
        header("Location: allDoctorList.php");
 }
 
 //delete Patient
 else if(isset($_POST["deletepatient"])){
		$id=$_POST["id"];
		patientDelete($id);
        header("Location: allPatientList.php");
 }
 
 //delete Donor
 else if(isset($_POST["deletedonor"])){
		$id=$_POST["id"];
		donorDelete($id);
        header("Location: allDonorList.php");
 }
 
 
 
 //delete Appointment
 else if(isset($_POST["appdelete"])){
		$id=$_POST["id"];
		doctorAppDelete($id);
        header("Location: doctorProfile.php");
 }
 
 //booking
 else if(isset($_POST["booking"])){
	 if(empty($_POST["name"])){
        $hasError=true;
        $err_name="Name Required";
    }
      else{
        $name=$_POST["name"];
    }
	if(empty($_POST["department"])){
        $hasError=true;
        $err_department="Department Required";
    }
      else{
        $department=$_POST["department"];
    }
	if(empty($_POST["hospital"])){
        $hasError=true;
        $err_hospital="Hospital Required";
    }
      else{
        $hospital=$_POST["hospital"];
    }
	if(empty($_POST["date"])){
        $hasError=true;
        $err_date="Date Required";
    }
      else{
        $date=$_POST["date"];
    }
	if(empty($_POST["time"])){
        $hasError=true;
        $err_time="Time Required";
    }
      else{
        $time=$_POST["time"];
    }
	if(empty($_POST["pname"])){
        $hasError=true;
        $err_pname="Patient Name Required";
    }
      else{
        $pname=$_POST["pname"];
    }
	if(empty($_POST["phone"])){
        $hasError=true;
        $err_phone="Patient Phone Required";
    }
      else{
        $phone=$_POST["phone"];
    }
	if(empty($_POST["nopatient"])){
        $hasError=true;
        $err_nopatient="Number of Patient Required";
    }
      else{
        $nopatient=$_POST["nopatient"];
    }
      if(!$hasError){
		  
        $rs=appBooking($name,$department,$hospital,$date,$time,$pname,$phone,$nopatient);
		
        if ($rs===true){
            header("Location: patientProfile.php");
        }
		$err_db = $rs;
      }
 }
	
	
	
	//Appointment Insertion
	
	else if(isset($_POST["createApp"])){
		
        if(empty($_POST["name"])){
            $hasError=true;
            $err_name="Name Required";
        }
        else{
            $name=$_POST["name"];
        }
		 if(empty($_POST["username"])){
            $hasError=true;
            $err_username="Userame Required";
        }
        else{
            $username=$_POST["username"];
        }
		if(empty($_POST["department"])){
            $hasError=true;
            $err_department="Department Required";
        }
        else{
            $department=$_POST["department"];
        }
		if(empty($_POST["hospital"])){
            $hasError=true;
            $err_hospital="Hospital Required";
        }
        else{
            $hospital=$_POST["hospital"];
        }
		if(empty($_POST["date"])){
            $hasError=true;
            $err_date="Date Required";
        }
        else{
            $date=$_POST["date"];
        }
		if(empty($_POST["time"])){
            $hasError=true;
            $err_time="Time Required";
        }
        else{
            $time=$_POST["time"];
        }

        

        if(!$hasError){
			
			$rs=insertAppointment($id,$username,$name,$department,$hospital,$date,$time);
            if($rs===true){
                header("location: doctorProfile.php");
            }
            $err_db=$rs;
			 
        }
    }
	
	//blood
	if(isset($_POST["donate"])){
		
        if(empty($_POST["name"])){
            $hasError=true;
            $err_name="Name Required";
        }
        else{
            $name=$_POST["name"];
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
			$rs=insertBlood($name,$bGroup,$phone);
            if($rs===true){
                header("location: donorProfile.php");
            }
            $err_db=$rs;   
        }
    }
	
	
	
	
	
	
	
	//All Functions
	
	
	
	
	function authenticateUserDoctor($username,$password){
		$query="select * from finaldoctor where username='$username' and password='$password'";
		$rs=get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function authenticateUserAdmin($username,$password){
		$query="select * from admin where username='$username' and password='$password'";
		$rs=get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function authenticateUserPatient($username,$password){
		$query="select * from patient where username='$username' and password='$password'";
		$rs=get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function authenticateUserDonor($username,$password){
		$query="select * from donor where username='$username' and password='$password'";
		$rs=get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function getAdminByUsername($username){
		$query= "select * from admin where username='$username'";
		$rs= get($query);
		return $rs;
	}
	function getDoctorByUsername($username){
		$query= "select * from finaldoctor where username='$username'";
		$rs= get($query);
		return $rs;
	}
	function getDoctorById($id){
     $query="select * from doctor where id=$id";
     $rs=get($query);
     return $rs;
    }
	
	//delete doctor
	function getFinalDoctorById($id){
     $query="select * from finaldoctor where id=$id";
     $rs=get($query);
     return $rs;
    }
	
	//delete patient
	function getFinalPatientById($id){
     $query="select * from patient where id=$id";
     $rs=get($query);
     return $rs;
    }
	
	//delete donor
	function getFinalDonorById($id){
     $query="select * from donor where id=$id";
     $rs=get($query);
     return $rs;
    }
	
	//booking Appointment
	function getAppointmentById($id){
     $query="select * from appointmentview where id=$id";
     $rs=get($query);
     return $rs;
    }
	
	function getPatientByUsername($username){
		$query= "select * from patient where username='$username'";
		$rs= get($query);
		return $rs;
	}
	function getDonorByUsername($username){
		$query= "select * from donor where username='$username'";
		$rs= get($query);
		return $rs;
	}
	function getAllDoctor(){
		$query= "select * from doctor";
		$rs= get($query);
		return $rs;
	}
	function getDoctorList(){
		$query= "select id,name,dob,bGroup,email,phone,department,hospital from finaldoctor";
		$rs= get($query);
		return $rs;
	}
	function getPatientList(){
		$query= "select id,name,dob,bGroup,email,phone from patient";
		$rs= get($query);
		return $rs;
	}
	function getDonorList(){
		$query= "select id,name,dob,bGroup,email,phone from donor";
		$rs= get($query);
		return $rs;
	}
	function editAdmin($username,$password,$id){
		$query="update admin set password='$password' where id='$id'";
		return execute($query);
	}
	function editDoctor($id,$name,$username,$password,$dob,$bGroup,$email,$phone,$department,$hospital){
		$query="update finaldoctor set name='$name',password='$password',dob='$dob',bGroup='$bGroup',email='$email',phone='$phone',department='$department',hospital='$hospital' where id='$id'";
		return execute($query);
	}
	function editPatient($id,$name,$username,$password,$dob,$bGroup,$email,$phone){
		$query="update patient set name='$name',password='$password',dob='$dob',bGroup='$bGroup',email='$email',phone='$phone' where id='$id'";
		return execute($query);
	}
	function editDonor($id,$name,$username,$password,$dob,$bGroup,$email,$phone){
		$query="update donor set name='$name',password='$password',dob='$dob',bGroup='$bGroup',email='$email',phone='$phone' where id='$id'";
		return execute($query);
	}
	function doctorAccept($id){
        $query1="select * from doctor where id='$id'";
        $result=get($query1);
        foreach ($result as $row){ 
            //$id =$row['id'];
            $name =$row['name'];
            $username =$row['username'];
            $password =$row['password'];
            $dob =$row['dob'];
            $bGroup =$row['bGroup'];
            $email =$row['email'];
            $phone =$row['phone'];
          }
		 $query2="INSERT INTO `finaldoctor` (`id`, `name`, `username`, `password`, `dob`, `bGroup`, `email`, `phone`, `department`, `hospital`) VALUES (NULL, '$name', '$username', '$password', '$dob', '$bGroup', '$email', '$phone', '', '')"; 
		 execute($query2);
		 
		 $query3="delete from doctor where id=$id";
		 execute($query3);
    }
	
	
	
	function appBooking($name,$department,$hospital,$date,$time,$pname,$phone,$nopatient){
		$query="insert into appointmentbooking values (NULL,'$name','$department','$hospital','$date','$time','$pname','$phone',$nopatient)";
        return execute($query);
		 
    }
	
	function doctorReject($id){
		$query="delete from doctor where id=$id";
		$rs= get($query);
		return $rs[0];
	}
	
	//delete Doctor
	function doctorDelete($id){
		$query="delete from finaldoctor where id=$id";
		$rs= get($query);
		return $rs[0];
	}
	
	//delete Patient
	function patientDelete($id){
		$query="delete from patient where id=$id";
		$rs= get($query);
		return $rs[0];
	}
	
	//delete Donor
	function donorDelete($id){
		$query="delete from donor where id=$id";
		$rs= get($query);
		return $rs[0];
	}
	
	
	
	function insertAppointment($id,$username,$name,$department,$hospital,$date,$time){
        $query="insert into appointmentview values (NULL,'$username','$name','$department','$hospital','$date','$time')";
        return execute($query);
    }
	
	
	function viewAppointment(){
		$query= "select * from appointmentview";
		$rs= get($query);
		return $rs;
	}
	
	
	function viewAppointmentByDoctor($username){
		$query= "select * from appointmentview where username='$username'";
		$rs= get($query);
		return $rs;
	}
	
	function doctorAppDelete($id){
		$query="delete from appointmentview where id=$id";
		$rs= get($query);
		return $rs[0];
	}
	
	
	function viewBookedAppList(){
		$query= "select * from appointmentbooking";
		$rs= get($query);
		return $rs;
	}
	
	
	function insertBlood($name,$bGroup,$phone){
        $query="insert into donateblood(`id`, `name`, `bGroup`, `phone`) values (NULL,'$name','$bGroup','$phone')";
        return execute($query);
    }
	
	function getBlood(){
		$query= "select * from donateblood";
		$rs= get($query);
		return $rs;
	}
	
	function getUserMessage(){
		$query= "select * from contact";
		$rs= get($query);
		return $rs;
	}
?>



