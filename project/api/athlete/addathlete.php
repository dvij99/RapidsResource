<?php

	include '../../connect/db.php';
	include '../../query/Athlete/AddAthlete.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$AID = $_POST["AID"];
		$City = $_POST["City"];
		$Province = $_POST["Province"];
		$FirstName = $_POST["FirstName"];
		$LastName = $_POST["LastName"];
		$DoB = $_POST["DoB"];
		$ClubName = $_POST["ClubName"];
		$StartDate = $_POST["StartDate"];
		$EndDate = $_POST["EndDate"];
		
		$conn = connect();
		
		addAthlete($conn, $AID, $City, $Province, $FirstName, $LastName, $DoB, $ClubName, $StartDate, $EndDate);
	}
	else {
		echo "Expects POST requests with information in the body.";
	}

?>