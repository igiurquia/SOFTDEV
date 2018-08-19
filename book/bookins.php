<?php

$con = mysqli_connect('localhost','root','','test1');

if(!$con){
	echo 'Not Connected To Server';
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$datein = $_POST['datein'];
$inhr = $_POST['inhour'];
$inmn = $_POST['inmin'];
$inpm = $_POST['inpm'];
$dateouts = $_POST['dateout'];
$outhr = $_POST['outhour'];
$outmin = $_POST['outmin'];
$outpm = $_POST['outpm'];

$sql = "INSERT INTO book (name,email,phone,indate,inhr,inmin,inpm,outdate,outhr,outmin,outpm) VALUES ('$name', '$email', '$phone', '$datein', '$inhr','$inmn', '$inpm', '$dateouts', '$outhr', '$outmin',
 '$outpm')";

if(!mysqli_query($con,$sql)){
	echo 'Not Inserted';
}else{
	echo 'Data Inserted';
}

header("refresh:0; url=../index/index.php");

?>