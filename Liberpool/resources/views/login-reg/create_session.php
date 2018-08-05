<?php

if($_POST){
$host='localhost';
$user='root';
$pass='';
$db='test1';

$email=$_POST['lemail'];
$password=$_POST['lpass'];

$conn=mysqli_connect($host, $user, $pass, $db);
	$query="SELECT * from registration where email='$email' and password='$password'";

	$result=mysqli_query($conn, $query);

	if(mysqli_num_rows($result)==1){
		session_start();
		$_SESSION['test1']= 'true';
		header('location:../index/index.php');
	}else{
		echo 'wrong username or password';
	}
}



?>