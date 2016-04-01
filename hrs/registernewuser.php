<?php
session_start();
include('connection.php');
	$name=$_POST['name'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=md5($_POST['password']);

	$query=mysql_query("SELECT username FROM user WHERE username='$username'");
	$count=mysql_num_rows($query);

	if($count>0){
		header("location:register.php");
		$_SESSION['error']="Sorry username already exist..<br/> Try another username";
	}
	else{
		$result="INSERT INTO `user`(`userId`, `name`, `address`, `phone`, `email`, `username`, `password`) VALUES ('','$name','$address','$phone','$email','$username','$password')";
		if (mysql_query($result)) {
			header('location:login.php');
			$_SESSION['success']='<span class="msg">Register successfully</span><br>';			
		}
		else{
			$_SESSION['error']='<span class="msg">There is some problem<br></span>';
		}
	}
?>