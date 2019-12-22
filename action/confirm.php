<?php 
#确认收货
include '../public/config.php';
#$confirm=$_GET['$confirm'];
$code=$_GET['code'];

$sql="update indent set confirm='1' , status_id='2' where code='{$code}'";
	
mysqli_query($link,$sql);
echo "<script>location='../personalcenter.php?c=orderlist'</script>";

 ?>