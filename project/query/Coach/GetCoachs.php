<?php

	function getCoaches($conn) {
		
		$sql = "CALL GetCoaches()";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>