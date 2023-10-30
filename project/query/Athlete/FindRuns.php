<?php

	function findRuns($conn, $AID) {
		
		$sql = "CALL FindRuns('$AID')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>