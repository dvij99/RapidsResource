<?php

	function findOfficial($conn, $ClubName) {
		
		$sql = "CALL FindOfficial('$ClubName')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>