<?php

	function editGivesPen($conn, $JID, $AID, $RID, $Num, $Penalty) {
		
		$sql = "CALL EditGivesPen('$JID', '$AID', '$RID', '$Num', '$Penalty')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "GivesPenalties edited";
		}

	}

?>