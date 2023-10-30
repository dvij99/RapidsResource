<?php

	function addUser($conn,$user,$hpwd,$salt) {
		
		//echo "adding USER";
		$sql = "INSERT INTO login (user, password, salt) VALUES ('$user', '$hpwd', '$salt')";
		
		$result = mysqli_query($conn, $sql);
		
		if (!$result){
			die('Error: ' . mysqli_error($conn));
		}
		
		return $result;

	}

?>