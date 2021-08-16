<?php
     require_once 'adminHeader.php';
    require_once 'controllers/login_controller.php';
	$bookedApp=viewBookedAppList();
?>
<html>
<head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 60%;
}

th {
  height: 40px;
}
td {
  height: 40px;
}
</style>
</head>
    <body>
        <fieldset>
            <p align="middle"><font color="blue" size="5">Booked Appointment</font></p>
            <p align="middle">
			<table border="1">
			<tr>
                <th>No</th>
                <th>Name</th>
				<th>Department</th>
				<th>Hospital</th>
				<th>Date</th>
				<th>Time</th>
				<th>Patient Name</th>
				<th>Patient Phone</th>
				<th>Number of Patient</th>
              </tr>     
                <?php
				$i = 1;
				foreach($bookedApp as $p){
					echo "<tr>";
						echo "<td align='center'>$i</td>";
						echo "<td align='center'>".$p["name"]."</p>";
						echo "<td align='center'>".$p["department"]."</p>";
						echo "<td align='center'>".$p["hospital"]."</p>";
						echo "<td align='center'>".$p["date"]."</p>";
						echo "<td align='center'>".$p["time"]."</p>";
						echo "<td align='center'>".$p["pname"]."</p>";
						echo "<td align='center'>".$p["phone"]."</p>";
						echo "<td align='center'>".$p["nopatient"]."</p>";
					
					echo "</tr>";
					$i++;
						
				}
			?>
                

            </table>
			</p>
        </fieldset>
    </body>
</html>