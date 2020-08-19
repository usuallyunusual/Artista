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
		
	}
	else{
		echo "error".$sql."<br>".$conn->error;
	}
$conn->close();



	}




	


?>