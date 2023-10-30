<?php

	function findCoached($conn, $CID) {
		
		$sql = "CALL FindCoached('$CID')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>