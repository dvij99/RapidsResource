<?php

	function addCategories($conn, $AID, $K1, $C1, $C2) {
		
		$sql = "CALL AddCategories('$AID', '$K1', '$C1', '$C2')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Athlete's Categories added";
		}

	}

?>