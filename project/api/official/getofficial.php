<?php

	include '../../connect/db.php';
	include '../../query/Official/GetOfficial.php';

	$OID = $_GET["OID"];
	
	$conn = connect();
	
	$result = getOfficial($conn, $OID);
	
	//Conversion to JSON
	
	header("Content-Type: JSON");
	$rowNumber = 0;
	$output = array();
	
	while($row = mysqli_fetch_array($result)) {
			$output[$rowNumber]['PersonID'] = $row['PersonID'];
			$output[$rowNumber]['FirstName'] = $row['FirstName'];
			$output[$rowNumber]['LastName'] = $row['LastName'];
			$output[$rowNumber]['DoB'] = $row['DoB'];
			$output[$rowNumber]['ClubName'] = $row['ClubName'];
			
			$rowNumber++;
	}
	echo json_encode($output, JSON_PRETTY_PRINT);

?>