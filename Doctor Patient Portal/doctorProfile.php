<?php
    require_once 'doctorHeader.php';
	require_once 'controllers/login_controller.php';
	if(!isset($_SESSION["loggedDoctor"])){
		header("Location: login.php");
	}
	$username=$_SESSION["loggedDoctor"];
	
?>
<html>
<head>
<link rel="stylesheet" href="CSS/mystyle.css">
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 30%;
}

th {
  height: 40px;
}
td {
  height: 40px;
}
</style>
</head>
    <body style="background-color:cyan;">
	<h2 class="head2" align="middle">Doctor Information</h2>
	<table align="center">
        <?php 
		$rs=getDoctorByUsername($username);
                    foreach ($rs as $row){
					echo "<tr><td align='center'>Name</td><td align='center'>$row[name]</td></tr>";
                    echo "<tr><td align='center'>Username</td><td align='center'>$row[username]</td></tr>";
                    echo "<tr><td align='center'>Password</td><td align='center'>$row[password]</td></tr>";
					echo "<tr><td align='center'>Date of Birth</td><td align='center'>$row[dob]</td></tr>";
					echo "<tr><td align='center'>Blood Group</td><td align='center'>$row[bGroup]</td></tr>";
					echo "<tr><td align='center'>Email</td><td align='center'>$row[email]</td></tr>";
					echo "<tr><td align='center'>Phone</td><td align='center'>$row[phone]</td></tr>";
					echo "<tr><td align='center'>Department</td><td align='center'>$row[department]</td></tr>";
					echo "<tr><td align='center'>Hospital</td><td align='center'>$row[hospital]</td></tr>";
					}
		
		?>
		</table>
		<div class="gap2">
         &nbsp
        </div>
		<div align="middle"><a class="app1" href="doctorEdit.php">Edit</a><div>
		
    </body>
</html>