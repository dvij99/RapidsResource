<?php

	function addParticipates($conn, $RID, $AID) {
		
		$sql = "CALL AddParticipates('$RID', '$AID')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Participates relationship added";
		}

	}

?>