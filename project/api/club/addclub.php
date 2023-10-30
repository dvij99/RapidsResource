<?php

	include '../../connect/db.php';
	include '../../query/Club/AddClub.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$ClubName = $_POST["ClubName"];
		$Province = $_POST["Province"];
		$OID = $_POST["OID"];
		$StartDate = $_POST["StartDate"];
		$EndDate = $_POST["EndDate"];
		
		$conn = connect();
		
		addClub($conn, $ClubName, $Province, $OID, $StartDate, $EndDate);
	}
	else {
		echo "Expects POST requests with information in the body.";
	}
?>