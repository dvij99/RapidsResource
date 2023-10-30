<?php

	include '../../connect/db.php';
	include '../../query/Race/GetRace.php';

	$RID = $_GET["RID"];
	
	$conn = connect();
	
	$result = getRace($conn, $RID);
	
	//Conversion to JSON
	
	header("Content-Type: JSON");
	$rowNumber = 0;
	$output = array();

	while($row = mysqli_fetch_array($result)) {
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