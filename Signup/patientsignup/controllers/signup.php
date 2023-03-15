<?php
session_start();
include './db_connection.php';

$signup_errors = [];



if (!empty($_POST['fullname'])) {
    $fullname= mysqli_real_escape_string($db, $_POST['fullname']);

    $query = "SELECT * FROM patientsignup WHERE fullname = '$fullname' ";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);

    if($user){
        // if user with same  already exixts
        array_push($signup_errors, 'Your name is already exists');
        $_SESSION['signup_errors'] = $signup_errors;
        header('Location:'.site_url('/signuppateint.php'));
    }else{
        // store the name in the session
        $_SESSION['fullname'] = $fullname;
    }
} else {
    array_push($signup_errors, 'Full name is required!');
}



if (!empty($_POST['phonenumber'])) {
    $phonenumber= mysqli_real_escape_string($db, $_POST['phonenumber']);
    $query = "SELECT * FROM patientsignup WHERE phonenumber = '$phonenumber' ";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);

    if($user){
        // if user with same  already exixts
        array_push($signup_errors, 'Your phone number is already exists');
        $_SESSION['signup_errors'] = $signup_errors;
        header('Location:'.site_url('/signuppateint.php'));
    }else{
        // store the name in the session
        $_SESSION['phonenumber'] = $phonenumber;
    }
} else {
    array_push($signup_errors, 'Phone number is required!');
}









// Validate Email, Check if it is not stored in the database

if (!empty($_POST['email'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);

    $query = "SELECT * FROM patientsignup WHERE email = '$email' ";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);

    if($user){
        // if user with same email id already exixts
        array_push($signup_errors, 'Email already exists');
        $_SESSION['signup_errors'] = $signup_errors;
        header('Location:'.site_url('/signuppateint.php'));
    }else{
        // store the email in the session
        $_SESSION['email'] = $email;
    }
} else {
    array_push($signup_errors, 'Email is required!');
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
}else{
    array_push($signup_errors, 'Both password fields are required!');
}


// If there is no error in the validation, store in the database
if(count($signup_errors) > 0){
    $_SESSION['signup_errors'] = $signup_errors;
    header('Location:'.site_url('/signuppateint.php'));
}else{
    // insert the data in the database
    $password = md5($password);
    $query = "INSERT INTO patientsignup (fullname,phonenumber,email, password) VALUES('$fullname','$phonenumber','$email', '$password')";
    mysqli_query($db, $query);

    // Last inserted row id
    $last_id = mysqli_insert_id($db);

    // Retrieve the last row
    $row = mysqli_query($db, "SELECT * FROM patientsignup WHERE id= $last_id");
    $user_details = mysqli_fetch_array($row, MYSQLI_ASSOC);
    $_SESSION['user_details'] = $user_details;

    // Redirect to Home Dashboard
    header('Location:'.site_url('/signuppateint.php'));
}















