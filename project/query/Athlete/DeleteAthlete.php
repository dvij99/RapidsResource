<?php

	function deleteAthlete($conn, $AID) {
		
		$sql = "CALL DeleteAthlete('$AID')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Athlete deleted";
		}

	}

?>