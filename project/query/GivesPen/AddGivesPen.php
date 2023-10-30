<?php

	function addGivesPen($conn, $JID, $AID, $RID, $Num, $Penalty) {
		
		$sql = "CALL AddGivesPen('$JID', '$AID', '$RID', '$Num', '$Penalty')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "GivesPenalties added";
		}

	}

?>