<?php

	function deleteRace($conn, $RID) {
		
		$sql = "CALL DeleteRace('$RID')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Race deleted";
		}

	}

?>