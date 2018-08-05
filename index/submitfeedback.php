<?php

$con = mysqli_connect('localhost','root','','test1');

if(!$con){
	echo 'Not Connected To Server';
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$cemail = $_POST['cemail'];
$message= $_POST['message'];

$sql = "INSERT INTO contactus (fname, lname, phone,cemail,message) VALUES ('$fname', '$lname', '$phone','$cemail','$message')";

if(!mysqli_query($con,$sql)){
	echo 'Not Inserted';
}else{
	echo 'Data Inserted';
}

header("refresh:1; url=index.php");

?>