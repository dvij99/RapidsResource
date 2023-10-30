<?php

	include '../../connect/db.php';
	include '../../query/GivesPen/EditGivesPen.php';

	if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
		
		$JID = $_GET["JID"];
		$AID = $_GET["AID"];
		$RID = $_GET["RID"];
		$Num = $_GET["Num"];
		$Penalty = $_GET["Penalty"];
		
		$conn = connect();
		
		editGivesPen($conn, $JID, $AID, $RID, $Num, $Penalty);
	}
	else {
		echo "Expects PUT requests with information in the header.";
	}

?>