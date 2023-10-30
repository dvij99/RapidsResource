<?php

	function findAllRuns($conn, $RID) {
		
		$sql = "CALL FindAllRuns('$RID')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>