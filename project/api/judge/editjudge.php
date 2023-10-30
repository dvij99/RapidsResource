<?php

	include '../../connect/db.php';
	include '../../query/Judge/EditJudge.php';

	if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
		$JID = $_GET["JID"];
		$Certification = $_GET["Certification"];
		
		$conn = connect();
	
		editJudge($conn, $JID, $Certification);
	}
	else {
		echo "Expects PUT requests with information in the header.";
	}


?>