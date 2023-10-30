<?php

	include '../../connect/db.php';
	include '../../query/Club/FindOfficial.php';

	$ClubName = $_GET["ClubName"];
	
	$conn = connect();
	
	$result = findOfficial($conn, $ClubName);
	
	//Conversion to JSON
	
	header("Content-Type: JSON");
	$rowNumber = 0;
	$output = array();
	
	while($row = mysqli_fetch_array($result)) {
			$output[$rowNumber]['OID'] = $row['OID'];
			$output[$rowNumber]['FirstName'] = $row['FirstName'];
			$output[$rowNumber]['LastName'] = $row['LastName'];
			$output[$rowNumber]['DoB'] = $row['DoB'];
			$output[$rowNumber]['ClubName'] = $row['ClubName'];
			$output[$rowNumber]['StartDate'] = $row['StartDate'];
			$output[$rowNumber]['EndDate'] = $row['EndDate'];
			
			$rowNumber++;
	}
	echo json_encode($output, JSON_PRETTY_PRINT);

?>