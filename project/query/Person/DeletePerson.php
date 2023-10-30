<?php

	function deletePerson($conn, $PersonID) {
		
		$sql = "CALL DeletePerson('$PersonID')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Person deleted";
		}

	}

?>