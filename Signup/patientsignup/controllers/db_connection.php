<?php
$db = mysqli_connect("localhost","root","","hospitalmanagement");

// Check connection
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
function site_url($data=false){
    return 'http://'.$_SERVER['HTTP_HOST'].'/Project/Signup/patientsignup'.$data;
}


?>