<?php
    require_once 'adminHeader.php';
	require_once 'controllers/login_controller.php';
	if(!isset($_SESSION["loggedAdmin"])){
		header("Location: login.php");
	}
	$username=$_SESSION["loggedAdmin"];
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
	
	<h2 class="head2" align="middle">Admin Information</h2>
	<table  align="center">
        <?php 
		$rs=getAdminByUsername($username);
                    foreach ($rs as $row){
                    echo "<tr><td align='center'>Username</td><td align='center'>$row[username]</td></tr>";
                    echo "<tr><td align='center'>Password</td><td align='center'>$row[password]</td></tr>";
					}
		
		?>
		</table>
		<div class="gap2">
         &nbsp
        </div>
		<div align="middle"><a class="app1" href="adminEdit.php">Edit</a><div>
    </body>
</html>