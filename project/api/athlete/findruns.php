<?php

	include '../../connect/db.php';
	include '../../query/Athlete/FindRuns.php';

	$AID = $_GET["AID"];
	
	$conn = connect();
	
	$result = findRuns($conn, $AID);
	
	//Conversion to JSON
	
	header("Content-Type: JSON");
	$rowNumber = 0;
	$output = array();
	
	while($row = mysqli_fetch_array($result)) {
			$output[$rowNumber]['AID'] = $row['AID'];
			$output[$rowNumber]['RID'] = $row['RID'];
			$output[$rowNumber]['Num'] = $row['Num'];
			$output[$rowNumber]['Category'] = $row['Category'];
			$output[$rowNumber]['RunTime'] = $row['RunTime'];
			$output[$rowNumber]['TimePenalties'] = $row['TimePenalties'];
			
			$rowNumber++;
	}
	echo json_encode($output, JSON_PRETTY_PRINT);

?>