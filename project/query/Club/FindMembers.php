<?php

	function findMembers($conn, $ClubName) {
		
		$sql = "CALL FindMembers('$ClubName')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>