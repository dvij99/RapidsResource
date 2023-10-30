<?php

	include '../../connect/db.php';
	include '../../query/Club/GetClub.php';

	$ClubName = $_GET["ClubName"];
	
	$conn = connect();
	
	$result = getClub($conn, $ClubName);
	
	//Conversion to JSON
	
	header("Content-Type: JSON");
	$rowNumber = 0;
	$output = array();
	
	while($row = mysqli_fetch_array($result)) {
			$output[$rowNumber]['ClubName'] = $row['ClubName'];
			$output[$rowNumber]['Province'] = $row['Province'];
			$output[$rowNumber]['OID'] = $row['OID'];
			$output[$rowNumber]['StartDate'] = $row['StartDate'];
			$output[$rowNumber]['EndDate'] = $row['EndDate'];
			
			$rowNumber++;
	}
	echo json_encode($output, JSON_PRETTY_PRINT);

?>