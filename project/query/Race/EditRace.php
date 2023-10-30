<?php

	function editRace($conn, $RID, $Location, $RaceDate, $Categories, $ClubName, $OID) {
		
		$sql = "CALL EditRace('$RID', '$Location', '$RaceDate', '$Categories', '$ClubName', '$OID')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Race edited";
		}

	}

?>