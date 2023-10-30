<?php

	include '../../connect/db.php';
	include '../../query/Club/DeleteClub.php';

	if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		$ClubName = $_GET["ClubName"];
		$conn = connect();
		deleteClub($conn, $ClubName);
	}
	else {
		echo "Expects DELETE requests with information in the header.";
	}


?>