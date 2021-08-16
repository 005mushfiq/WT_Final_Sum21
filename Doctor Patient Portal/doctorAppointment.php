<?php
    
    require_once 'doctorHeader.php';
	
	
?>
<html>
<head>
<style>
.app{
	font-size:30px;
	font-family:calibri;
	padding-left:40px;
	padding-right:40px;
	padding-top:20px;
	padding-bottom:20px;
	text-decoration:none;
	border-radius:5px;
	background-color:rgb(77, 77, 255);
}
.app:hover{
	background-color:rgb(51, 0, 128);
}
.gap{
	padding-top:40px;
	padding-bottom:40px;
}
</style>
</head>
<body>
<div class="gap">
&nbsp
</div>
<table align="center">
<tr>
<td>
<button class="app"><a style="text-decoration:none; color:rgb(204, 255, 51)" href="doctorCreateApp.php" >Create Appointment</a></button>
</td>
<td>
<button class="app"><a style="text-decoration:none; color:rgb(204, 255, 51)" href="viewappbydoctor.php" >View Appointment</a></button>
</td>
</tr>
</table>
</body>
</html>