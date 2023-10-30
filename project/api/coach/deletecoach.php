<?php

	include '../../connect/db.php';
	include '../../query/Coach/DeleteCoach.php';

	if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		$CID = $_GET["CID"];
		$conn = connect();
		deleteCoach($conn, $CID);
	}
	else {
		echo "Expects DELETE requests with information in the header.";
	}


?>