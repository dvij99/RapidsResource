<?php

	include '../../connect/db.php';
	include '../../query/Coach/AddCoach.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$CID = $_POST["CID"];
		$Certification = $_POST["Certification"];
		$FirstName = $_POST["FirstName"];
		$LastName = $_POST["LastName"];
		$DoB = $_POST["DoB"];
		$ClubName = $_POST["ClubName"];
		$StartDate = $_POST["StartDate"];
		$EndDate = $_POST["EndDate"];
		
		$conn = connect();
		
		addCoach($conn, $CID, $Certification, $FirstName, $LastName, $DoB, $ClubName, $StartDate, $EndDate);
	}
	else {
		echo "Expects POST requests with information in the body.";
	}


?>