<?php

	include '../../connect/db.php';
	include '../../query/Official/AddOfficial.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$OID = $_POST["OID"];
		$FirstName = $_POST["FirstName"];
		$LastName = $_POST["LastName"];
		$DoB = $_POST["DoB"];
		$ClubName = $_POST["ClubName"];
		$StartDate = $_POST["StartDate"];
		$EndDate = $_POST["EndDate"];
		
		$conn = connect();
		
		addOfficial($conn, $OID, $FirstName, $LastName, $DoB, $ClubName, $StartDate, $EndDate);
	}
	else {
		echo "Expects POST requests with information in the body.";
	}

?>