<?php

	function deleteAthleteRun($conn, $AID, $RID, $Num, $Category) {
		
		$sql = "CALL DeleteAthleteRun('$AID', '$RID', '$Num', '$Category')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Athlete run deleted";
		}

	}

?>