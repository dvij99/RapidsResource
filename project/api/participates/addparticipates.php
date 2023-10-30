<?php

	include '../../connect/db.php';
	include '../../query/Participates/AddParticipates.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$RID = $_POST["RID"];
		$AID = $_POST["AID"];
		
		$conn = connect();
		
		addParticipates($conn, $RID, $AID);
	}
	else {
		echo "Expects POST requests with information in the body.";
	}

?>