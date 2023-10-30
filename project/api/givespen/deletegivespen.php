<?php

	include '../../connect/db.php';
	include '../../query/GivesPen/DeleteGivesPen.php';

	if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		$JID = $_GET["JID"];
		$AID = $_GET["AID"];
		$RID = $_GET["RID"];
		$Num = $_GET["Num"];
		$conn = connect();
		deleteGivesPen($conn, $JID, $AID, $RID, $Num);
	}
	else {
		echo "Expects DELETE requests with information in the header.";
	}

?>