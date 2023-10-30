<?php

	function deleteJudge($conn, $JID) {
		
		$sql = "CALL DeleteJudge('$JID')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Judge deleted";
		}

	}

?>