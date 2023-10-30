<?php

	include '../../connect/db.php';
	include '../../query/Judge/FindPenalties.php';

	$JID = $_GET["JID"];
	
	$conn = connect();
	
	$result = findPenalties($conn, $JID);
	
	//Conversion to JSON
	
	header("Content-Type: JSON");
	$rowNumber = 0;
	$output = array();
	
	while($row = mysqli_fetch_array($result)) {
			$output[$rowNumber]['JID'] = $row['JID'];
			$output[$rowNumber]['Certification'] = $row['Certification'];
			$output[$rowNumber]['AID'] = $row['AID'];
			$output[$rowNumber]['RID'] = $row['RID'];
			$output[$rowNumber]['Num'] = $row['Num'];
			$output[$rowNumber]['Penalty'] = $row['Penalty'];
			
			$rowNumber++;
	}
	echo json_encode($output, JSON_PRETTY_PRINT);

?>