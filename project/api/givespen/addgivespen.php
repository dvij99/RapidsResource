<?php

	include '../../connect/db.php';
	include '../../query/GivesPen/AddGivesPen.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$JID = $_POST["JID"];
		$AID = $_POST["AID"];
		$RID = $_POST["RID"];
		$Num = $_POST["Num"];
		$Penalty = $_POST["Penalty"];
		
		$conn = connect();
		
		addGivesPen($conn, $JID, $AID, $RID, $Num, $Penalty);
	}
	else {
		echo "Expects POST requests with information in the body.";
	}

?>