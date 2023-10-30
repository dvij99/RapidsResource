<?php

	include '../../connect/db.php';
	include '../../query/Categories/DeleteCategories.php';

	if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		$AID = $_GET["AID"];
		$conn = connect();
		deleteCategories($conn, $AID);
	}
	else {
		echo "Expects DELETE requests with information in the header.";
	}

?>