<?php

	function deleteParticipates($conn, $RID, $AID) {
		
		$sql = "CALL DeleteParticipates('$RID', '$AID')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Participates relationship deleted";
		}

	}

?>