<?php 
include '../public/config.php';

$username=$_POST['username'];
$password=md5($_POST['password']);

$sql="select * from user where username='{$username}' and password='{$password}'";
$rst=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($rst);

if ($row) {
	$_SESSION['home_username']=$username;
	$_SESSION['home_userid']=$row['id'];
	echo "<script>alert('登录成功！！！');</script>"; 
	echo "<script>location='../index.php';</script>";
}else{

	echo "<script>alert('登录失败！！！');</script>"; 
	echo "<script>location='../login.php';</script>";
}
	
 ?>