<?php 
include '../public/config.php';

$username=$_POST['username'];
$password=md5($_POST['password']);
$email=$_POST['email'];
$sex=$_POST['sex'];

$sql="insert into user(username,password,email,sex,status) values('{$username}','{$password}','{$email}','{$sex}','1') ";

if (mysqli_query($link,$sql)) {
	echo "<script>alert('注册成功！！！');</script>"; 
	echo "<script>location='../login.php';</script>";
}
echo "Error!!!";
 ?>