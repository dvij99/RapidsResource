<?php

	include '../../connect/db.php';
	include '../../query/AthleteRun/EditAthleteRun.php';

	if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
		
		$AID = $_GET["AID"];
		$RID = $_GET["RID"];
		$Num = $_GET["Num"];
		$Category = $_GET["Category"];
		$RunTime = $_GET["RunTime"];
		$TimePenalties = $_GET["TimePenalties"];
		
		$conn = connect();
		
		editAthleteRun($conn, $AID, $RID, $Num, $Category, $RunTime, $TimePenalties);
	}
	else {
		echo "Expects PUT requests with information in the header.";
	}

?>