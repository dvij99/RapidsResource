<?php

	include '../connect/db.php';
	include '../query/Race.php';

	
	
	$ReqType = $_GET['type'];
	$RID = intval($_GET['RID']);
	$AID = intval($_GET['AID']);
	
	if($ReqType == 'Race' && $RID != null){
		getRunsFromRace($RID);
	}elseif($ReqType == 'Athlete' && $AID != null){
		getRunsFromAthlete($AID);
	}

	function getRunsFromRace($RID){
		
		//establish connection
		$conn = connect();
		$result = getRuns($conn);
		
		$rowNumber = 0;
		$output = array();
		while($row = mysqli_fetch_array($result)) { 
			if ($row['RID'] == $RID){
				$output[$rowNumber]['AID'] = $row['AID'];
				$output[$rowNumber]['RID'] = $row['RID'];
				$output[$rowNumber]['Num'] = $row['Num'];
				$output[$rowNumber]['Cat'] = $row['Cat'];
				$output[$rowNumber]['Time'] = $row['Time'];
				$output[$rowNumber]['Tpen'] = $row['Tpen'];
				$rowNumber++;
				
			}
		
		}
		echo json_encode($output, JSON_PRETTY_PRINT);
	}
	
	function getRunsFromAthlete($AID){
		//establish connection
		$conn = connect();
		$result = getRuns($conn);
		
		$rowNumber = 0;
		$output = array();
		while($row = mysqli_fetch_array($result)) { 
			if ($row['AID'] == $AID){
				$output[$rowNumber]['AID'] = $row['AID'];
				$output[$rowNumber]['RID'] = $row['RID'];
				$output[$rowNumber]['Num'] = $row['Num'];
				$output[$rowNumber]['Cat'] = $row['Cat'];
				$output[$rowNumber]['Time'] = $row['Time'];
				$output[$rowNumber]['Tpen'] = $row['Tpen'];
				$rowNumber++;
				
			}
		
		}
		echo json_encode($output, JSON_PRETTY_PRINT);
	}
		

	

?>