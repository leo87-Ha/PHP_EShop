<?php 
include '../public/config.php';
$id=$_GET['id'];
$sql="select * from goods where id ={$id}";
$ret=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($ret);

if ($row['stock']>0) {

	$_SESSION['shops'][$id]=$row;
	$_SESSION['goodsNum']++;
	$_SESSION['shops'][$id]['num']=1;
	echo "<script>location='../shopcarstep1.php'</script>";

}else{
echo "<script>alert('您购买的商品库存量不足！！！')</script>";
echo "<script>location='../index.php'</script>";

}

 ?>