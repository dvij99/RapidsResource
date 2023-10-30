<?php

	include '../connect/db.php';
	include '../query/Athlete.php';
	
	
	//arguments
	$ReqType = $_GET['type'];
	$ID = $_GET["ID"];
	$CAT = $_GET['CAT'];
	if($ReqType == 'GET'){
		getAthletesFromDB($ID);
	}elseif($ReqType == 'CAT'){
		
	}
	
	function getAthletesFromDB($ID){
		//establish connection to database
		$conn = connect();
	
		//request all athletes
		$result = getAthlete($conn);
	
		//convert to JSON
	
		header("Content-Type: JSON");
		$rowNumber = 0;
		$output = array();
	
		while($row = mysqli_fetch_array($result)) {
				if ($ID == null || $ID == $row['RID']){
					$output[$rowNumber]['ID'] = $row['ID'];
					$output[$rowNumber]['City'] = $row['City'];
					$output[$rowNumber]['Province'] = $row['Province'];
					$rowNumber++;
				}
		}
		echo json_encode($output, JSON_PRETTY_PRINT);
	}
	
	function ($ID,$CAT){
		//establish connection to database
		$conn = connect();
		
		//request all athletes
		$result = getAthlete($conn);
		
		$validID = false;
		while($row = mysqli_fetch_array($result)) {
			if ($row['RID'] == $ID){
				validID = true;
				break;
			}
		}
		
		if($validID) {
			$res = updateCat($ID,$CAT);
			echo $res; 
		}
		
		
	}

?>