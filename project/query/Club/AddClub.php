<?php

	function addClub($conn, $ClubName, $Province, $OID, $StartDate, $EndDate) {
		
		$sql = "CALL AddClub('$ClubName', '$Province', '$OID', '$StartDate', '$EndDate')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Club added";
		}

	}

?>