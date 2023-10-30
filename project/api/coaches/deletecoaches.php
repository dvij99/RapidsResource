<?php

	include '../../connect/db.php';
	include '../../query/Coaches/DeleteCoaches.php';

	if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		$AID = $_GET["AID"];
		$CID = $_GET["CID"];
		$conn = connect();
		deleteCoaches($conn, $AID, $CID);
	}
	else {
		echo "Expects DELETE requests with information in the header.";
	}

?>