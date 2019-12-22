<?php 
include '../public/config.php';
$id=$_GET['id'];
$sql="delete from touch where id={$id}";

if (mysqli_query($link,$sql)) {
	echo "<script>location='../personalcenter.php?c=address'</script>";
}

 ?>