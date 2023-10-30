<?php

	function deleteGivesPen($conn, $JID, $AID, $RID, $Num) {
		
		$sql = "CALL DeleteGivesPen('$JID', '$AID', '$RID', '$Num')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "GivesPenalties deleted";
		}

	}

?>