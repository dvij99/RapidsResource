<?php

	include '../../connect/db.php';
	include '../../query/Coach/EditCoach.php';

	if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
		$CID = $_GET["CID"];
		$Certification = $_GET["Certification"];
		
		$conn = connect();
		
		editCoach($conn, $CID, $Certification);
	}
	else {
		echo "Expects PUT requests with information in the header.";
	}


?>