<?php

	include '../../connect/db.php';
	include '../../query/Race/FindAllRuns.php';

	$RID = $_GET["RID"];
	
	$conn = connect();
	
	$result = findAllRuns($conn, $RID);
	
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