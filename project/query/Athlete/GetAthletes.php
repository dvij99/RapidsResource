<?php

	function getAthletes($conn) {
		$sql = "CALL GetAthletes()";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>