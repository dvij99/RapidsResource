<?php

	function findInProv($conn, $Province) {
		
		$sql = "CALL FindInProv('$Province')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>