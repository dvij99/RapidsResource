<?php

	include '../connect/db.php';
	include '../query/Club.php';
	
	
	$ReqType = $_GET['type'];
	$ClubName = $_Get['clubName'];
	$Province = $_Get['Province'];
	$OID = $_Get['OID'];
	$StartDate = $_Get['StartDate'];
	$EndDate = $_Get['EndDate'];
	
	
	
	if ($ReqType == 'get'){
		getClubsFromDB();
	}elseif ($ReqType == 'add'){
		
	}
	
	function addClubtoDB($ClubName,$Province,$OID,$StartDate,$EndDate){
		
		$conn = connect();
		$result = getClubs($conn);
		
		$validClubName = true;
		while($row = mysqli_fetch_array($result)) { 
			if ($row['ClubName'] == $ClubName){
				$validClubName = false;
				break;
			}			
		}
		
		$result = getOfficials();
		$validOID = false;
		while($row = mysqli_fetch_array($result)) { 
			if ($row['OID'] == $OID){
				$validOID = true;
				break;
			}			
		}
		
		if ($validClubName){
			if ($validOID){
				addClub($ClubName,$Province,$OID,$StartDate,$EndDate);
			}else{
				addClub($ClubName,$Province,null,$StartDate,$EndDate);
			}
			
		}
		
	}
	
	function getClubsFromDB(){
		//establish connection
		$conn = connect();
		$result = getClubs($conn);
		
		$rowNumber = 0;
		$output = array();
		while($row = mysqli_fetch_array($result)) { 
			$output[$rowNumber]['ClubName'] = $row['ClubName'];
			$output[$rowNumber]['Province'] = $row['Province'];
			$output[$rowNumber]['OID'] = $row['OID'];
			$output[$rowNumber]['StartDate'] = $row['StartDate'];
			$output[$rowNumber]['EndDate'] = $row['EndDate'];
			$rowNumber++;
				
		
		}
		echo json_encode($output, JSON_PRETTY_PRINT);
		
	}
	
	
	
	

?>	