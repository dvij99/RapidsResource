<?php

	function getRace($conn, $RID) {
		
		$sql = "CALL GetRace('$RID')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>