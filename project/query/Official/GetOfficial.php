<?php

	function getOfficial($conn, $OID) {
		
		$sql = "CALL GetOfficial('$OID')";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>