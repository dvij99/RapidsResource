<?php

	function getJudges($conn) {
		$sql = "CALL GetJudges()";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>