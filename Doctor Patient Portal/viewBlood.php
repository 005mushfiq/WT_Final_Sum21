<?php
     require_once 'patientHeader.php';
    require_once 'controllers/login_controller.php';
	$blood=getBlood();
?>
<html>
<head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 40%;
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
            <p align="middle"><font color="blue" size="5">Blood Info</font></p>
            <p align="middle">
			<table border="1">
			<tr>
                <th>No</th>
                <th>Name</th>
				<th>Blood Group</th>
				<th>Phone</th>
				
              </tr>     
                <?php
				$i = 1;
				foreach($blood as $p){
					echo "<tr>";
						echo "<td align='center'>$i</td>";
						echo "<td align='center'>".$p["name"]."</p>";
						echo "<td align='center'>".$p["bGroup"]."</p>";
						echo "<td align='center'>".$p["phone"]."</p>";
					echo "</tr>";
					$i++;
						
				}
			?>
                

            </table>
			</p>
        </fieldset>
    </body>
</html>