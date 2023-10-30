<?php
	
	$host = 'localhost'; 
	$user = 'root';
	$pass =  '12345678';
	$db = 'webdatabase';
	
	$conn;
	
	function connect() {
		global $host;
		global $user;
		global $pass;
		global $db;
		
		global $conn;
		
		$conn = mysqli_connect($host, $user, $pass, $db);
		
		if(mysqli_connect_errno($conn)){
				print "Connection Unsuccessful";
		}
		else{
				print "Connection Successful";
		}
		
		return $conn;
	}

?>