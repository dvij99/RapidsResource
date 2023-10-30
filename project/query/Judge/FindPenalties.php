<?php

	function findPenalties($conn, $JID) {
		
		$sql = "CALL FindPenalties('$JID')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>