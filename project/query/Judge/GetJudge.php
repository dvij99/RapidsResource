<?php

	function getJudge($conn, $JID) {
		
		$sql = "CALL GetJudge('$JID')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>