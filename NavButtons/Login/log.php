<?php

		$servername="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="login";
		$email=$_POST['email'];
		$password=$_POST['pass'];
		
		
		


		$link=mysqli_connect($servername, $dbusername, $dbpassword);
		mysqli_select_db($link,"login");
if (mysqli_connect_errno()) {
	echo "failed to connect" . mysqli_connect_error();
	
}


{
	if (isset($_POST['email'])) {
		
		
	if (empty($email) || empty($password) ) {
		header('location:login.html');
	}
		
	else{	
$result=mysqli_query($link,"SELECT * FROM main WHERE email='$email' AND pass='$password'  ") 
or die("failed to query database" .mysqli_connect_error());
$row=mysqli_fetch_array($result);


if($email== $row['email'] && $password == $row['pass']){

	echo "log in success".$row['email'];
	echo '<a href="../Home.html"> Click here to continue</a>';
	

}
else{
	echo "login failed";
	echo '<a href="login.html"> Click here to go back to login page </a>';
	
}

}
}
}


?>