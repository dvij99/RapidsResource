<?php

	function deleteJudgedAt($conn, $JID, $RID) {
		
		$sql = "CALL DeleteJudgedAt('$JID', '$RID')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "JudgedAt relationship deleted";
		}

	}

?>