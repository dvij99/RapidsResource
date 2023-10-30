<?php

	include '../../connect/db.php';
	include '../../query/Club/FindInProv.php';

	$Province = $_GET["Province"];
	
	$conn = connect();
	
	$result = findInProv($conn, $Province);
	
	//Conversion to JSON
	
	header("Content-Type: JSON");
	$rowNumber = 0;
	$output = array();
	
	while($row = mysqli_fetch_array($result)) {
			$output[$rowNumber]['ClubName'] = $row['ClubName'];
			$output[$rowNumber]['Province'] = $row['Province'];
			
			$rowNumber++;
	}
	echo json_encode($output, JSON_PRETTY_PRINT);

?>