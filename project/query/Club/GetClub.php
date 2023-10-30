<?php

	function getClub($conn, $ClubName) {
		
		$sql = "CALL GetClub('$ClubName')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>