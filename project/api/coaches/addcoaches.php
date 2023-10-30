<?php

	include '../../connect/db.php';
	include '../../query/Coaches/AddCoaches.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$AID = $_POST["AID"];
		$CID = $_POST["CID"];
		
		$conn = connect();
		
		addCoaches($conn, $AID, $CID);
	}
	else {
		echo "Expects POST requests with information in the body.";
	}

?>