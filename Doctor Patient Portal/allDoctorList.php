<?php
     require_once 'adminHeader.php';
    require_once 'controllers/login_controller.php';
	$doctorList=getDoctorList();
?>
<html>
<head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 80%;
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
            <p align="middle"><font color="blue" size="5">Doctor List</font></p>
            <p align="middle">
			<table border="1">
			<tr>
                <th>No</th>
                <th>Name</th>
				<th>DOB</th>
				<th>Blood Group</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Department</th>
				<th>Hospital</th>
				<th>Delete</th>
              </tr>     
                <?php
				$i = 1;
				foreach($doctorList as $p){
					echo "<tr>";
						echo "<td align='center'>$i</td>";
						echo "<td align='center'>".$p["name"]."</p>";
						echo "<td align='center'>".$p["dob"]."</p>";
						echo "<td align='center'>".$p["bGroup"]."</p>";
						echo "<td align='center'>".$p["email"]."</p>";
						echo "<td align='center'>".$p["phone"]."</p>";
						echo "<td align='center'>".$p["department"]."</p>";
						echo "<td align='center'>".$p["hospital"]."</p>";
					    echo '<td align="center"><a href="deleteDoctor.php?id='.$p["id"].'"><input type="button" value="Delete"></a></td>';
					echo "</tr>";
					$i++;
						
				}
			?>
                

            </table>
			</p>
        </fieldset>
    </body>
</html>