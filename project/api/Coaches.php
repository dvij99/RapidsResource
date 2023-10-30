<?php

	include '../connect/db.php';
	include '../query/Athlete.php';
	include '../query/Coach.php';
	
	//arguments
	$AID = $_GET["AID"];
	$CID = $_GET["CID"];
	
	//establish connection to database
	$conn = connect();
	
	CreateCoachesRelation($AID,$CID);
	
	function CreateCoachesRelation($AID,$CID){
		//request all athletes
		$resultA = getAthlete($conn);
		$resultB = getCoaches($conn);
	
		$isvalidA = false;
		while($row = mysqli_fetch_array($resultA)) {
			if ($AID == $row['ID']){
				isvalidA = true;
				break;
			}
		}
		$isvalidB = false;
		while($row = mysqli_fetch_array($resultB)) {
			if ($CID == $row['CID']){
				isvalidB = true;
				break;
			}
		}
	
	
		if (isvalidA && isvalidB){
			//execute command
		
			$output = "Sucessfully Added"
		}else 
		{
			$output = "Invalid inputs"
		}
	
		//convert to JSON
	
		header("Content-Type: JSON");
	
		echo json_encode($output, JSON_PRETTY_PRINT);
	}
	

?>