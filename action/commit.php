<?php 
include '../public/config.php';
$code=time().mt_rand();#订单号——时间戳+随机数
$user_id=$_SESSION['home_userid'];
$time=time();
$touch_id=$_POST['id'];

foreach ($_SESSION['shops'] as $goods) {
	$sql="insert into indent(code,user_id,time,touch_id,goods_id,price,num,status_id,confirm) values('{$code}','{$user_id}','{$time}','{$touch_id}','{$goods['id']}','{$goods['price']}','{$goods['num']}','1','0')";
	#print_r($sql);
	mysqli_query($link,$sql);
	#减库存
	$st=$goods['stock']-$goods['num'];
	$sql_stock="update goods set stock='$st' where id={$goods['id']}";
	mysqli_query($link,$sql_stock);
	#print_r($sql_stock);
}
 
$_SESSION['shops']=array();
$_SESSION['goodsNum']=0;
echo "<script>location='../shopcarstep3.php?orderNum={$code}'</script>"; 
 ?>