<?php

	include '../../connect/db.php';
	include '../../query/Judge/FindJudged.php';

	$JID = $_GET["JID"];
	
	$conn = connect();
	
	$result = findJudged($conn, $JID);
	
	//Conversion to JSON
	
	header("Content-Type: JSON");
	$rowNumber = 0;
	$output = array();
	
	while($row = mysqli_fetch_array($result)) {
			$output[$rowNumber]['JID'] = $row['JID'];
			$output[$rowNumber]['Certification'] = $row['Certification'];
			$output[$rowNumber]['RID'] = $row['RID'];
			$output[$rowNumber]['Location'] = $row['Location'];
			$output[$rowNumber]['RaceDate'] = $row['RaceDate'];
			$output[$rowNumber]['Categories'] = $row['Categories'];
			$output[$rowNumber]['ClubName'] = $row['ClubName'];
			$output[$rowNumber]['OID'] = $row['OID'];
			
			$rowNumber++;
	}
	echo json_encode($output, JSON_PRETTY_PRINT);

?>