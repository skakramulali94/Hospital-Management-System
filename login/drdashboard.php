<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="dashboard.css">

</head>
<body>
<?php
if(isset($_SESSION['username']))
{
	?>
<div class="top">
	Doctor Dashboard 
</div>
<hr>

<button class="button"> <!--onclick="document.location.href='view-history.php'"--> <span> My Appointment </span></button>
<button class="button"><!--onclick="document.location.href='view-history.php'"--> <span> My Account </span></button>
<button class="button"><span><a href="logout.php" style="text-decoration:None;color:white;">Logout </a></span></button>
<?php }
else{
	echo "<script>location.href='drlogin.php'</script>";
}
?>
<!-- Stop Going back using browser button 
<script>
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()",0);
        window.onunload = function () { null };
    </script>-->
</body>
</html>