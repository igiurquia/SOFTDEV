<?php

$con = mysqli_connect('localhost','root','','test1');

if(!$con){
	echo 'Not Connected To Server';
}

$name = $_POST['name'];
$card = $_POST['card'];
$cvv = $_POST['cvv'];
$exp = $_POST['exp'];

$sql = "INSERT INTO payment (name, cardnum, cvv, expdate) VALUES ('$name', '$card', '$cvv', '$exp')";

if(!mysqli_query($con,$sql)){
	echo 'Not Inserted';
}else{
	echo 'Data Inserted';
}

header("refresh:1; url=../index/index.php");

?>