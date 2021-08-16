<?php
	require_once 'controllers/search_controller.php';
	$key = $_GET["key"];
	$hos = searchHospital($key);
	
	if(count($hos)> 0){
		foreach($hos as $p){
			echo "<p>".$p["hospital"]."</p>";
		}
	}
?>