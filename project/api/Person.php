
<?php

	include '../connect/db.php';
	include '../query/Person.php';
	include '../query/Club.php';


	$ReqType = $_GET['type'];
	$PID = intval($_GET['ID']);
	
	if($ReqType == 'GET'){
		getPersonID($PID);
	}
	
	function getPersonID($PID){

		$conn = connect();
	
		$result = getPerson($conn);
	
		//Conversion to JSON
	
		header("Content-Type: JSON");
		$rowNumber = 0;
		$output = array();
	
		while($row = mysqli_fetch_array($result)) {
			if ($PID == null || $PID == $row['PersonID']){
				$output[$rowNumber]['PersonID'] = $row['PersonID'];
				$output[$rowNumber]['FirstName'] = $row['FirstName'];
				$output[$rowNumber]['LastName'] = $row['LastName'];
				$output[$rowNumber]['DoB'] = $row['DoB'];
				$output[$rowNumber]['ClubName'] = $row['ClubName'];
				$output[$rowNumber]['StartDate'] = $row['StartDate'];
				$output[$rowNumber]['EndDate'] = $row['EndDate'];
				$rowNumber++;
			}
		}
		echo json_encode($output, JSON_PRETTY_PRINT);
	}
	
	function addPersonToDB($Name,$DOB,$clubName,$startDate,$endDate){
		$conn = connect();
		
		$clubs = getClubs();
		$validClub = false;
		while($row = mysqli_fetch_array($clubs)) { 
			if($row['clubName'] == $clubName)
				$validClub = true;
				break;
			}	
		}
		
		if(!$validClub){
			$clubName = null;
		}
		
		$res = AddPerson($Name,$DOB,$clubName,$startDate,$endDate);
		echo $res;
	}

?>