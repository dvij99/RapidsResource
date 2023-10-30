<?php

	function addAthleteRun($conn, $AID, $RID, $Num, $Category, $RunTime, $TimePenalties) {
		
		$sql = "CALL AddAthleteRun('$AID', '$RID', '$Num', '$Category', '$RunTime', '$TimePenalties')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Athlete's Run added";
		}

	}

?>