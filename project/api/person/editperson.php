<?php

	include '../../connect/db.php';
	include '../../query/Person/EditPerson.php';

	if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
		$PersonID = $_GET["PersonID"];
		$FirstName = $_GET["LastName"];
		$LastName = $_GET["LastName"];
		$DoB = $_GET["DoB"];
		$ClubName = $_GET["ClubName"];
		$StartDate = $_GET["StartDate"];
		$EndDate = $_GET["EndDate"];
		
		$conn = connect();
		
		editPerson($conn, $PersonID, $FirstName, $LastName, $DoB, $ClubName, $StartDate, $EndDate);
	
	}
	else {
		echo "Expects PUT requests with information in the header.";
	}
?>