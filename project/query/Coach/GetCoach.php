<?php

	function getCoach($conn, $CID) {
		
		$sql = "CALL GetCoach('$CID')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>