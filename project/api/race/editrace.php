<?php

	include '../../connect/db.php';
	include '../../query/Race/EditRace.php';

	if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
		$RID = $_GET["RID"];
		$Location = $_GET["Location"];
		$RaceDate = $_GET["RaceDate"];
		$Categories = $_GET["Categories"];
		$ClubName = $_GET["ClubName"];
		$OID = $_GET["OID"];
		
		$conn = connect();
		
		editRace($conn, $RID, $Location, $RaceDate, $Categories, $ClubName, $OID);
	}
	else {
		echo "Expects PUT requests with information in the header.";
	}


?>