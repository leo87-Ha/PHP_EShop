<?php 
session_start();

$id=$_GET['id'];

$_SESSION['shops'][$id]['num']++;
$_SESSION['goodsNum']++;
if ($_SESSION['shops'][$id]['num']>9) {
	$_SESSION['shops'][$id]['num']=9;
	$_SESSION['goodsNum']--;
}

echo "<script>location='../shopcarstep1.php'</script>";
 ?>