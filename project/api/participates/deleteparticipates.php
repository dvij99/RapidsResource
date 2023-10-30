<?php

	include '../../connect/db.php';
	include '../../query/Participates/DeleteParticipates.php';

	if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		$RID = $_GET["RID"];
		$AID = $_GET["AID"];
		$conn = connect();
		deleteParticipates($conn, $RID, $AID);
	}
	else {
		echo "Expects DELETE requests with information in the header.";
	}

?>