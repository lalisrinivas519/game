<?php
session_start();
include("php_include/connect.php");

$userid=$_POST['userid'];
$password=$_POST['password'];
$query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid' and `password`='$password'");
if(mysqli_num_rows($query)>0){
	$_SESSION['userid']=$userid;
	$_SESSION['id']=session_id();
	$_SESSION['login_type']="user";
	
	echo"<script>alert('login is successful');window.location.assign('login.php');</script>";
}
else{
	echo"<script>alert('login failed');window.location.assign('login.php');</script>";
}


?>