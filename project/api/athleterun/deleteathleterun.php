<?php

	include '../../connect/db.php';
	include '../../query/AthleteRun/DeleteAthleteRun.php';

	if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		$AID = $_GET["AID"];
		$RID = $_GET["RID"];
		$Num = $_GET["Num"];
		$Category = $_GET["Category"];
		$conn = connect();
		deleteAthleteRun($conn, $AID, $RID, $Num, $Category);
	}
	else {
		echo "Expects DELETE requests with information in the header.";
	}

?>