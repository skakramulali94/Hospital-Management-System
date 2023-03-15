<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="dashboard.css">

</head>
<body>
<?php
if(isset($_SESSION["username"]))
{
	?>
<div class="top">
	Patient Dashboard 
</div>
<hr>
<button class="button" onclick="document.location.href='patient-booking.php'"><span> Book Apointment </span></button>
<button class="button" onclick="document.location.href='view-history.php'"><span> View Apointment </span></button>
<button class="button"><span><a href="logout.php" style="text-decoration:None;color:white;">Logout </a></span></button>
<?php }
else{
	echo "<script>location.href='patientlogin.php'</script>";
}
?>
</body>
</html>