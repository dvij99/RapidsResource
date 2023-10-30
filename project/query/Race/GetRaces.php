<?php

	function getRaces($conn) {
		$sql = "CALL GetRaces()";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>