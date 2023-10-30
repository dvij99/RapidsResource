<?php

	function deleteCategories($conn, $AID) {
		
		$sql = "Call DeleteCategories('$AID')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Athlete's Categories deleted";
		}

	}

?>