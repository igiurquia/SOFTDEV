<?php

$con = mysqli_connect('localhost','root','','test1');

if(!$con){
	echo 'Not Connected To Server';
}

$email = $_POST['remail'];
$pass = $_POST['rpass'];
$confPass = $_POST['rconfpass'];

$sql = "INSERT INTO registration (email, password, confPass) VALUES ('$email', '$pass', '$confPass')";

if(!mysqli_query($con,$sql)){
	echo 'Not Inserted';
}else{
	echo 'Data Inserted';
}

header("refresh:1; url=login.php");

?>