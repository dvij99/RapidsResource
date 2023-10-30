<?php

	function getClubs($conn) {
		$sql = "CALL GetClubs()";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>