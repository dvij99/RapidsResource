<?php

	function editAthlete($conn, $AID, $City, $Province) {
		
		$sql = "CALL EditAthlete('$AID', '$City', '$Province')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Athlete edited";
		}

	}

?>