<?php
include 'models/db_config.php';

function searchHospital($key){
		$query = "select id,hospital from appointmentview where hospital like '%$key%'";	
		$rs = get($query);
		return $rs;
	}

?>