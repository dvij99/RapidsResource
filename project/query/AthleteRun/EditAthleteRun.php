<?php

	function editAthleteRun($conn, $AID, $RID, $Num, $Category, $RunTime, $TimePenalties) {
		
		$sql = "CALL EditAthleteRun('$AID', '$RID', '$Num', '$Category', '$RunTime', '$TimePenalties')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Athlete's run edited";
		}

	}

?>