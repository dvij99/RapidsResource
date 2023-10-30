<?php

	function addRace($conn, $RID, $Location, $RaceDate, $Categories, $ClubName, $OID) {
		
		$sql = "CALL AddRace('$RID', '$Location', '$RaceDate, '$Categories', '$ClubName', '$OID')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Race added";
		}

	}

?>