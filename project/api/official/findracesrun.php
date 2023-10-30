<?php

	include '../../connect/db.php';
	include '../../query/Official/FindRacesRun.php';

	$OID = $_GET["OID"];
	
	$conn = connect();
	
	$result = findRacesRun($conn, $OID);
	
	//Conversion to JSON
	
	header("Content-Type: JSON");
	$rowNumber = 0;
	$output = array();
	
	while($row = mysqli_fetch_array($result)) {
			$output[$rowNumber]['OID'] = $row['OID'];
			$output[$rowNumber]['RID'] = $row['RID'];
			$output[$rowNumber]['Location'] = $row['Location'];
			$output[$rowNumber]['RaceDate'] = $row['RaceDate'];
			$output[$rowNumber]['Categories'] = $row['Categories'];
			$output[$rowNumber]['ClubName'] = $row['ClubName'];
			
			$rowNumber++;
	}
	echo json_encode($output, JSON_PRETTY_PRINT);

?>