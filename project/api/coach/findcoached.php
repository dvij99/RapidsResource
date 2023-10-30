<?php

	include '../../connect/db.php';
	include '../../query/Coach/FindCoached.php';

	$CID = $_GET["CID"];
	
	$conn = connect();
	
	$result = findCoached($conn, $CID);
	
	//Conversion to JSON
	
	header("Content-Type: JSON");
	$rowNumber = 0;
	$output = array();
	
	while($row = mysqli_fetch_array($result)) {
			$output[$rowNumber]['AID'] = $row['AID'];
			$output[$rowNumber]['FirstName'] = $row['FirstName'];
			$output[$rowNumber]['LastName'] = $row['LastName'];
			$output[$rowNumber]['DoB'] = $row['DoB'];
			$output[$rowNumber]['City'] = $row['City'];
			$output[$rowNumber]['Province'] = $row['Province'];
			$output[$rowNumber]['ClubName'] = $row['ClubName'];
			
			$rowNumber++;
	}
	echo json_encode($output, JSON_PRETTY_PRINT);

?>