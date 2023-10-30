<?php

	function findJudged($conn, $JID) {
		
		$sql = "CALL FindJudged('$JID')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>