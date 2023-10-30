<?php

	include '../../connect/db.php';
	include '../../query/Athlete/DeleteAthlete.php';

	if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		$AID = $_GET["AID"];
		$conn = connect();
		deleteAthlete($conn, $AID);
	}
	else {
		echo "Expects DELETE requests with information in the header.";
	}

?>