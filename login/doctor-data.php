<?php
	session_start();
	$username=$_POST["uname"];
	$password=$_POST["pass"];
	
$conn=new mysqli('localhost','root','','hospitalmanagement');

if($conn->connect_error)
{
	die('connection failed:'.$conn->connect_error);
}
else
{
	$query = "SELECT * FROM doctorsignup where email='$username' and password ='".md5($password)."';";
	// echo $query;
	$records=mysqli_query($conn,$query);
	$count=mysqli_num_rows($records);
	if($count>0){
		while ($row=mysqli_fetch_assoc($records)) {
			//echo "Loggin successful";
			$_SESSION["username"]=$row["fullname"];
			$_SESSION["email"]=$row["email"];
			echo "<script> location.href='drdashboard.php'; </script>";
		}
	}
	else{
		echo "<script>alert('username or password incorrect')</script>";
		echo "<script> location.href='drlogin.php' ; </script>";
	}
	
	$conn->close();
}
?>