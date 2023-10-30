<?php

	include '../../connect/db.php';
	include '../../query/JudgedAt/AddJudgedAt.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$JID = $_POST["JID"];
		$RID = $_POST["RID"];
		
		$conn = connect();
		
		addJudgedAt($conn, $JID, $RID);
	}
	else {
		echo "Expects POST requests with information in the body.";
	}

?>