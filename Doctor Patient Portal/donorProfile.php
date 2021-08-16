<?php
    require_once 'donorHeader.php';
	require_once 'controllers/login_controller.php';
	if(!isset($_SESSION["loggedDonor"])){
		header("Location: login.php");
	}
	$username=$_SESSION["loggedDonor"];
	
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
	<h2 class="head2" align="middle">Donor Information</h2>
	<table border="1" align="center">
        <?php 
		$rs=getDonorByUsername($username);
                    foreach ($rs as $row){
					echo "<tr><td align='center'>Name</td><td align='center'>$row[name]</td></tr>";
                    echo "<tr><td align='center'>Username</td><td align='center'>$row[username]</td></tr>";
                    echo "<tr><td align='center'>Password</td><td align='center'>$row[password]</td></tr>";
					echo "<tr><td align='center'>Date of Birth</td><td align='center'>$row[dob]</td></tr>";
					echo "<tr><td align='center'>Blood Group</td><td align='center'>$row[bGroup]</td></tr>";
					echo "<tr><td align='center'>Email</td><td align='center'>$row[email]</td></tr>";
					echo "<tr><td align='center'>Phone</td><td align='center'>$row[phone]</td></tr>";
					}
		
		?>
		</table>
		<div class="gap2">
         &nbsp
        </div>
		<div align="middle"><a class="app1" href="donorEdit.php">Edit</a><div>
    </body>
</html>