<?php 
include '../public/config.php';
$id=$_POST['id'];
$name=$_POST['username'];
$address=$_POST['address'];
$tel=$_POST['phonenum'];
$email=$_POST['mailadd'];

$sql="update touch set name='{$name}',addr='{$address}',tel='{$tel}',email='{$email}' where id={$id}";

if (mysqli_query($link,$sql)) {
	echo "<script>location='../personalcenter.php?c=address'</script>";
}

 ?>