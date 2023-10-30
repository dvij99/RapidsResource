<?php

	function findRaces($conn, $ClubName) {
		
		$sql = "CALL FindRaces('$ClubName')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>