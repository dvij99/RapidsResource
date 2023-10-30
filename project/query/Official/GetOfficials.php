<?php

	function getOfficials($conn) {
		
		$sql = "CALL GetOfficials()";
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>