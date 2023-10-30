<?php

	include '../../connect/db.php';
	include '../../query/JudgedAt/DeleteJudgedAt.php';

	if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		$JID = $_GET["JID"];
		$RID = $_GET["RID"];
		$conn = connect();
		deleteJudgedAt($conn, $JID, $RID);
	}
	else {
		echo "Expects DELETE requests with information in the header.";
	}

?>