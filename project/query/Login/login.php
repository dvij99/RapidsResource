<?php

	function getLoginInfo($conn) {
		$sql = "SELECT * FROM login";
		
		$result = mysqli_query($conn, $sql);
		if (!$result){
			die('Error: ' . mysqli_error($conn));
		}
		return $result;

	}

?>