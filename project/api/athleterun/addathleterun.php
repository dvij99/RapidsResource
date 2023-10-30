<?php

	include '../../connect/db.php';
	include '../../query/AthleteRun/AddAthleteRun.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$AID = $_POST["AID"];
		$RID = $_POST["RID"];
		$Num = $_POST["Num"];
		$Category = $_POST["Category"];
		$RunTime = $_POST["RunTime"];
		$TimePenalties = $_POST["TimePenalties"];
		
		$conn = connect();
		
		addAthleteRun($conn, $AID, $RID, $Num, $Category, $RunTime, $TimePenalties);
	}
	else {
		echo "Expects POST requests with information in the body.";
	}

?>