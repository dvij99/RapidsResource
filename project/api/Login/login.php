
<?php
	
	include '../../connect/db.php';
	include '../../query/Athlete/AddAthlete.php';
	include '../../query/Login/login.php';
	include '../../query/Login/AddAuth.php';
	//include '../../query/Login/AddAuth.php';
	
	$conn = connect();
	
	$user = $_POST["user"];
	$pwd = $_POST["password"];
	
	//echo $user;
	//echo $pwd;
	
	//look if username/password exist together in login table
	
	$result = getLoginInfo($conn);
	
	
	$validPair = false;
	
	while($row = mysqli_fetch_array($result)) {
		
		$hpwd = hash('sha256',$pwd + $row['salt']);
		//echo "hashes pwd: ";
		//echo $hpwd;
		//echo "hash row: ";
		//echo $row['password'];
		if ($hpwd == $row['password'] && $user== $row['user']){
			$validPair = true;
		}
	}
	
	if ($validPair){
		
		$cookie = rand();
		AddAuth($conn,$cookie);
		setcookie("auth",$cookie, time() + 3600,"/localhost/project/api");
		echo "true";
		echo $cookie;
		
	}else{
		echo "false";
	}
	
	

?>