<?php 
include '../public/config.php';

$name=$_POST['username'];
$address=$_POST['address'];
$tel=$_POST['phonenum'];
$email=$_POST['mailadd'];

$user_id=$_SESSION['home_userid'];
$sql="insert into touch(name,addr,tel,email,user_id) values('{$name}','{$address}','{$tel}','{$email}','{$user_id}')";

if (mysqli_query($link,$sql)) {
	echo "<script>location='../personalcenter.php?c=address'</script>";
}

 ?>