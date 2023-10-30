<?php

	function getAthlete($conn, $AID) {
		
		$sql = "CALL GetAthlete('$AID')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>