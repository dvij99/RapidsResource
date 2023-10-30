<?php

	include '../connect/db.php';
	include '../query/Race.php';

	$RID = $_GET["ID"];

	$conn = connect();
	
	
	
	$result = getRace($conn);
	
	//Conversion to JSON
	
	header("Content-Type: JSON");
	$rowNumber = 0;
	$output = array();
	
	while($row = mysqli_fetch_array($result)) {
			if ($RID == null || $RID == $row['RID']){
				$output[$rowNumber]['RID'] = $row['RID'];
				$output[$rowNumber]['location'] = $row['location'];
				$output[$rowNumber]['Date'] = $row['Date'];
				$output[$rowNumber]['Categories'] = $row['Categories'];
				$output[$rowNumber]['Club'] = $row['Club'];
				$output[$rowNumber]['Official'] = $row['Official'];
				$rowNumber++;
			}
	}
	echo json_encode($output, JSON_PRETTY_PRINT);

?>