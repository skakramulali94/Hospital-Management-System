<?php
	session_start();
	//$_SESSION["username"]=$_POST["username"];
	//$_SESSION["pass"]=$_POST["pass"];
	$username=$_POST["username"];
	$password=$_POST["pass"];
	
	
	
$conn=new mysqli('localhost','root','','hospitalmanagement');

if($conn->connect_error)
{
	die('connection failed:'.$conn->connect_error);
}
else
{
	 $query = "SELECT * FROM patientsignup where email='$username' and password ='".md5($password)."';";
	 //echo $query;
	 $records=mysqli_query($conn,$query);
	 $count=mysqli_num_rows($records);
	if($count>0){
		while ($row=mysqli_fetch_assoc($records)) {
		//echo "Loggin successful";
			$_SESSION["username"]=$row["fullname"];
			$_SESSION["email"]=$row["email"];
			echo '<script> window.location="dashboard.php"; </script>';
		}
	}
	else{
		echo "<script> alert('username or password incorrect !')</script>";
		echo '<script> window.location="patientlogin.php"; </script>';
	}
	
	$conn->close();
}
?>