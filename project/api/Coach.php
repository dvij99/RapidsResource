<?php

	include '../connect/db.php';
	include '../query/Coach.php';
	
	
	//arguments
	$CID = $_GET["ID"];
	
	//establish connection to database
	$conn = connect();
	
	//request all athletes
	$result = getCoach($conn);
	
	//convert to JSON
	
	header("Content-Type: JSON");
	$rowNumber = 0;
	$output = array();
	
	while($row = mysqli_fetch_array($result)) {
			if ($CID == null || $CID == $row['CID']){
				$output[$rowNumber]['CID'] = $row['CID'];
				$output[$rowNumber]['Certification'] = $row['Certification'];
				$rowNumber++;
			}
	}
	echo json_encode($output, JSON_PRETTY_PRINT);
	
	

?>