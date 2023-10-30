<?php

	function findRacesRun($conn, $OID) {
		
		$sql = "CALL FindRacesRun('$OID')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>