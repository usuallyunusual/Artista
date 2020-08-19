<?php




		$servername="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="login";
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$name=$_POST['name'];
		$contact=$_POST['contact'];
		$bio=$_POST['about'];


		$conn = new mysqli($servername, $dbusername, $dbpassword,$dbname);

// Check connection
if (mysqli_connect_error()) {
    die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
} 
else
{


	$sql= "INSERT INTO artist (name,contact,bio)
	values('$name','$contact','$bio')";
	if ($conn->query($sql)===TRUE) {
		echo "registered successfully";
		
	}
	else{
		echo "error".$sql."<br>".$conn->error;
		echo '<a href="artistsu.html"> Click here to try again</a>';
	}


	}
if (mysqli_connect_error()) {
    die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
} 
else
{

	$sql= "INSERT INTO main (email,pass)
	values('$email','$pass')";
	if ($conn->query($sql)===TRUE) {
		echo "registered successfully";
		echo '<a href="..\..\Login.html"> Click here to proceed to login </a>';
		
	}
	else{
		echo "error".$sql."<br>".$conn->error;
		echo '<a href="artistsu.html"> Click here to try again</a>';
	}
$conn->close();



	}




	


?>