<?php

	include '../../connect/db.php';
	include '../../query/Official/DeleteOfficial.php';

	if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		$OID = $_GET["OID"];
		
		$conn = connect();
		
		deleteOfficial($conn, $OID);
	}
	else {
		echo "Expects DELETE requests with information in the header.";
	}

?>