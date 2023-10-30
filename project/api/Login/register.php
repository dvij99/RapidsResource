
<?php

	include '../../connect/db.php';
	include '../../query/Login/register.php'; 
	
	$conn = connect();
	
	$user = $_POST["user"];
	$pwd = $_POST["password"];
	
	$salt = rand();
	
	$hpwd = hash('sha256',$pwd + $salt);
	
	
	echo "user = ";
	echo $user;
	echo $pwd;
	$result = addUser($conn,$user,$hpwd,$salt);
	//echo "response";
	echo $result;

?>