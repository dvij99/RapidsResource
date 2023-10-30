<?php

	function deleteCoach($conn, $CID) {
		
		$sql = "CALL DeleteCoach('$CID')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Coach deleted";
		}

	}

?>