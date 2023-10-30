<?php

	function addAthlete($conn, $AID, $City, $Province, $FirstName, $LastName, $DoB, $ClubName, $StartDate, $EndDate) {
		
		$sql = "CALL CountAthlete('$AID')";
		
		$result = mysqli_query($conn, $sql);
		
		$row = mysqli_fetch_row($result);
		
		mysqli_free_result($result);
		mysqli_next_result($conn);
		
		$sql1 = "CALL AddAthletePerson('$AID', '$FirstName', '$LastName', '$DoB', '$ClubName', '$StartDate', '$EndDate')";
		
		if ($row[0] == 0) {
			if (!mysqli_query($conn, $sql1)) {
				die('Error: ' . mysqli_error($conn));
			}
		}
		else {
			echo "Person data unchanged ";
		}
		
		$sql2 = "CALL AddAthlete('$AID', '$City', '$Province')";
		
		if (!mysqli_query($conn, $sql2)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Athlete added";
		}

	}

?>