<?php

	function addCoaches($conn, $AID, $CID) {
		
		$sql = "CALL AddCoaches('$AID', '$CID')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Coaches relationship added";
		}

	}

?>