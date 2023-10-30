<?php

	include '../../connect/db.php';
	include '../../query/Judge/DeleteJudge.php';

	if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		$JID = $_GET["JID"];
		$conn = connect();
		deleteJudge($conn, $JID);
	}
	else {
		echo "Expects DELETE requests with information in the header.";
	}

?>