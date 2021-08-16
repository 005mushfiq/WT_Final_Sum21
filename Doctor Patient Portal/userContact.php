<?php
     require_once 'adminHeader.php';
    require_once 'controllers/login_controller.php';
	$msg=getUserMessage();
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
  height: 60px;
}
</style>
</head>
    <body>
        <fieldset>
            <p align="middle"><font color="blue" size="5">Users Messages</font></p>
            <p align="middle">
			<table border="1">
			<tr>
                <th>No</th>
                <th>Name</th>
				<th>Email</th>
				<th>Messages</th>
				
              </tr>     
                <?php
				$i = 1;
				foreach($msg as $p){
					echo "<tr>";
						echo "<td align='center'>$i</td>";
						echo "<td align='center'>".$p["name"]."</p>";
						echo "<td align='center'>".$p["email"]."</p>";
						echo "<td align='center'>".$p["message"]."</p>";
						
					
					echo "</tr>";
					$i++;
						
				}
			?>
                

            </table>
			</p>
        </fieldset>
    </body>
</html>