<?php

	include '../../connect/db.php';
	include '../../query/Categories/AddCategories.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$AID = $_POST["AID"];
		$K1 = $_POST["K1"];
		$C1 = $_POST["C1"];
		$C2 = $_POST["C2"];
		
		$conn = connect();
		
		addCategories($conn, $AID, $K1, $C1, $C2);
	}
	else {
		echo "Expects POST requests with information in the body.";
	}

?>