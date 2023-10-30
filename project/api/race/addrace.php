<?php

	include '../../connect/db.php';
	include '../../query/Race/AddRace.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$RID = $_POST["RID"];
		$Location = $_POST["Location"];
		$RaceDate = $_POST["RaceDate"];
		$Categories = $_POST["Categories"];
		$ClubName = $_POST["ClubName"];
		$OID = $_POST["OID"];

		$conn = connect();
		
		addRace($conn, $RID, $Location, $RaceDate, $Categories, $ClubName, $OID);
	}
	else {
		echo "Expects POST requests with information in the body.";
	}
?>