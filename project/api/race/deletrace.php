<?php

	include '../../connect/db.php';
	include '../../query/Race/DeleteRace.php';
	
	if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		$RID = $_GET["RID"];
		
		$conn = connect();
		
		deleteRace($conn, $RID);
	}
	else {
		echo "Expects DELETE requests with information in the header.";
	}


?>