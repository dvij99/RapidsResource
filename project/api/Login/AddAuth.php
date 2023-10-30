<?php

	function addAuth($conn,$cookie) {
		$time = time() + 3600;
		$sql = "INSERT INTO authorized(cookie,exp) VALUES('$cookie',$time)";
		
		
		
		$result = mysqli_query($conn, $sql);
		
		return $result;

	}

?>