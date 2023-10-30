<?php

	include '../../connect/db.php';
	include '../../query/Athlete/EditAthlete.php';

	if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
		
		$AID = $_GET['AID'];
		$City = $_GET["City"];
		$Province = $_GET["Province"];
		$conn = connect();
		
		editAthlete($conn, $AID, $City, $Province);
	}
	else {
		echo "Expects PUT requests with information in the header.";
	}

?>