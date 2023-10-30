<?php

	function deleteClub($conn, $ClubName) {
		
		$sql = "CALL DeleteClub('$ClubName')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Club deleted";
		}

	}

?>