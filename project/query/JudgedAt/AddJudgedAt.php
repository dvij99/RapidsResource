<?php

	function addJudgedAt($conn, $JID, $RID) {
		
		$sql = "CALL AddJudgedAt('$JID', '$RID')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "JudgedAt relationship added";
		}

	}

?>