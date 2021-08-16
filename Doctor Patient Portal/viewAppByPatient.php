<?php
    require_once 'patientHeader.php';
    require_once 'controllers/login_controller.php';
	$app=viewAppointment();
	
?>
<html>
<head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 55%;
}

th {
  height: 40px;
}
td {
  height: 40px;
}
</style>
<script src="js/search.js"></script>
</head>
    <body>
	<form action="" method="post"> 
        <fieldset>
            <p align="middle"><font color="blue" size="5">Appointment List</font></p>
			<p align="middle"><input type="text" placeholder="Search by Hospital" onkeyup="searchHospital(this)"></p>
	        <div align="center" id="suggesstion"></div>
            <p align="middle">
			<table border="1">
			<tr>
                <th>No</th>
                <th>Name</th>
                <th>Department</th>
				<th>Hospital</th>
				<th>Date</th>
				<th>Time</th>
				<th>Appointment</th>
              </tr>     
                <?php
				$i = 1;
				foreach($app as $p){
					    echo "<tr>";
						echo "<td align='center'>$i</td>";
						echo "<td align='center'>".$p["name"]."</p>";
						echo "<td align='center'>".$p["department"]."</p>";
						echo "<td align='center'>".$p["hospital"]."</p>";
						echo "<td align='center'>".$p["date"]."</p>";
						echo "<td align='center'>".$p["time"]."</p>";
						echo '<td align="center"><a href="appBooking.php?id='.$p["id"].'"><input type="button" value="Appointment"></a></td>';
                        echo "</tr>";
                       
					   						
					$i++;
                     					
				}
				
			?>
            </table>
			</p>
        </fieldset>
		</form>
    </body>
</html>