<?php

	include '../../connect/db.php';
	include '../../query/Judge/AddJudge.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$JID = $_POST["JID"];
		$Certification = $_POST["Certification"];
		$FirstName = $_POST["FirstName"];
		$LastName = $_POST["LastName"];
		$DoB = $_POST["DoB"];
		$ClubName = $_POST["ClubName"];
		$StartDate = $_POST["StartDate"];
		$EndDate = $_POST["EndDate"];
		
		$conn = connect();
		
		addJudge($conn, $JID, $Certification, $FirstName, $LastName, $DoB, $ClubName, $StartDate, $EndDate);
	}
	else {
		echo "Expects POST requests with information in the body.";
	}
?>