<?php

	function editJudge($conn, $JID, $Certification) {
		
		$sql = "CALL EditJudge('$JID', '$Certification')";
		
		if (!mysqli_query($conn, $sql)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Judge edited";
		}

	}

?>