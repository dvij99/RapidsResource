<?php

	function deleteOfficial($conn, $OID) {
		
		$sql = "CALL DeleteOfficial('$OID')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Official deleted";
		}

	}

?>