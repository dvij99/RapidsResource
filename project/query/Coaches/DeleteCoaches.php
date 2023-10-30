<?php

	function deleteCoaches($conn, $AID, $CID) {
		
		$sql = "CALL DeleteCoaches('$AID', '$CID')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Coaches relationship deleted";
		}

	}

?>