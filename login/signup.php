<?php
session_start();
include './db_connection.php';

$fullname=$_POST['fullname'];
$phonenumber=$_POST['phonenumber'];

$signup_errors = [];

// Validate Email, Check if it is not stored in the database

if (!empty($_POST['email'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $query = "SELECT * FROM doctorsignup WHERE email = '$email' ";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);

    if($user){
        // if user with same email id already exixts
        array_push($signup_errors, 'Email already exists');
        $_SESSION['signup_errors'] = $signup_errors;
        header('Location:'.site_url('/signupdoctor.php'));
    }else{
        // store the email in the session
        $_SESSION['email'] = $email;
    }
}

// Validate the password
if(!empty($_POST['password']) && !empty($_POST['pw_confirm'])){
    $password = $_POST['password'];
    $pw_confirm = $_POST['pw_confirm'];

    if ($password !== $pw_confirm) {
        array_push($signup_errors, 'Both passwords must be same!');
    }
    if (strlen($password) < 8) {
        array_push($signup_errors, 'Password length must be minimum 8 characters!');
    }
	else{
        // store the email in the session
        $_SESSION['password'] = $password;
    }
}

// If there is no error in the validation, store in the database
if(count($signup_errors) > 0){
    $_SESSION['signup_errors'] = $signup_errors;
    header('Location:'.site_url('/signupdoctor.php'));
}else{
    // insert the data in the database
    $password = md5($password);
    $query = "INSERT INTO doctorsignup (fullname,phonenumber,email, password)
			VALUES('$fullname','$phonenumber','$email', '$password')";
    mysqli_query($db, $query);
    // Last inserted row id
    //$last_id = mysqli_insert_id($db);

    // Retrieve the last row
    //$row = mysqli_query($db, "SELECT * FROM doctorsignup WHERE id= $last_id");
    //$user_details = mysqli_fetch_array($row, MYSQLI_ASSOC);
    //$_SESSION['user_details'] = $user_details;

    // Redirect to Home Dashboard
   echo"<script> location.href='../../../login/drlogin.php'</script>";
}















