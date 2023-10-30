<?php

	function editPerson($conn, $PersonID, $FirstName, $LastName, $DoB, $ClubName, $StartDate, $EndDate) {
		
		$sql = "CALL EditPerson('$PersonID', '$FirstName', '$LastName', '$DoB', '$ClubName', '$StartDate', '$EndDate')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Person edited";
		}

	}

?>