<?php

	include '../../connect/db.php';
	include '../../query/Club/EditClub.php';

	if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
		$ClubName = $_GET["ClubName"];
		$Province = $_GET["Province"];
		$OID = $_GET["OID"];
		$StartDate = $_GET["StartDate"];
		$EndDate = $_GET["EndDate"];
		
		$conn = connect();
		
		editClub($conn, $ClubName, $Province, $OID, $StartDate, $EndDate);
	
	}
	else {
		echo "Expects PUT requests with information in the header.";
	}

?>