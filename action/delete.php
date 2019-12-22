<?php 
session_start();
$id=$_GET['id'];
$_SESSION['goodsNum']-=$_SESSION['shops'][$id]['num'];
unset($_SESSION['shops'][$id]);

echo "<script>location='../shopcarstep1.php'</script>";

 ?>