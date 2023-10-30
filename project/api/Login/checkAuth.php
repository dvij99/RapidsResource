<?php

	function checkAuth($conn,$cookie) {
		$sql = "SELECT c.cookie, c.exp FROM authorized as c WHERE c.cookie = $cookie";
		
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result)
		
		if (time() < $row['exp']){
			return true;
		}else{
			return false;
		}

	}

?>