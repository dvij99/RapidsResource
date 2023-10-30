<?php

	include '../../connect/db.php';
	include '../../query/Categories/EditCategories.php';

	if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
		
		$AID = $_GET["AID"];
		$K1 = $_GET["K1"];
		$C1 = $_GET["C1"];
		$C2 = $_GET["C2"];
		
		$conn = connect();
		
		editCategories($conn, $AID, $K1, $C1, $C2);
	}
	else {
		echo "Expects PUT requests with information in the header.";
	}

?>