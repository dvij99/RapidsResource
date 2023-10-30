<?php

	function addJudge($conn, $JID, $Certification, $FirstName, $LastName, $DoB, $ClubName, $StartDate, $EndDate) {
		
		$sql = "CALL CountJudge('$JID')";
		
		$result = mysqli_query($conn, $sql);
		
		$row = mysqli_fetch_row($result);

		mysqli_free_result($result);
		mysqli_next_result($conn);
		
		$sql1 = "CALL AddJudgePerson('$JID', '$FirstName', '$LastName', '$DoB', '$ClubName', '$StartDate', '$EndDate')";
		
		if ($row[0] == 0) {
			if (!mysqli_query($conn, $sql1)) {
				die('Error: ' . mysqli_error($conn));
			}
		}
		else {
			echo "Person data unchanged ";
		}
		
		$sql2 = "CALL AddJudge('$JID', '$Certification')";
		
		if (!mysqli_query($conn, $sql2)){
			die('Error: ' . mysqli_error($conn));
		} else {
			echo "Coach added";
		}

	}

?>