<?php

$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$birthday=$_POST['birthday'];
$Height=$_POST['Height'];
$weight=$_POST['weight'];
$Contact=$_POST['Contact'];
$Marital=$_POST['Marital'];
$textarea=$_POST['textarea'];
$f2name=$_POST['f2name'];
$Relationship=$_POST['Relationship'];
$Contact2=$_POST['Contact2'];
$Postal=$_POST['Postal'];


//databse connection
$conn=new mysqli('localhost','root','','hospitalmanagement');
if($conn->connect_error)
{
	die('connection failed:'.$conn->connect_error);
}
else
{
	$stmt=$conn->prepare("insert into patient(name,email,gender,birthday,Height,weight,Contact,Marital,textarea,f2name,Relationship,Contact2,Postal) values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssssssssss",$name,$email,$gender,$birthday,$Height,$weight,$Contact,$Marital,$textarea,$f2name,$Relationship,$Contact2,$Postal);
	$stmt->execute();
	echo "register succesfully........";
	$stmt->close();
	$conn->close();
}


	?>