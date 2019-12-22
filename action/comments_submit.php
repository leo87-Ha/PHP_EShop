<?php 
#评论提交处理
include '../public/config.php';
$content=$_POST['content'];
$user_id=$_SESSION['home_userid'];
$goods_id=$_POST['goods_id'];
$time=time();

$sql="insert into comment(user_id,content,goods_id,time) values('{$user_id}','{$content}','{$goods_id}','{$time}')";

if (mysqli_query($link,$sql)) {

echo "<script>location='../proDetails.php?goods_id=$goods_id'</script>";
}

 ?>