<?php 
session_start();
$arr=$_SESSION['shops'];
$num=$_SESSION['goodsNum'];
$_SESSION=array();

$_SESSION['shops']=$arr;
$_SESSION['goodsNum']=$num;

$_SESSION['home_userid']=NULL;
$_SESSION['home_username']=NULL;

echo "<script>location='../index.php';</script>";

 ?>