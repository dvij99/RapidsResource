<?php

	function editCoach($conn, $CID, $Certification) {
		
		$sql = "CALL EditCoach('$CID', '$Certification')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Coach edited";
		}

	}

?>