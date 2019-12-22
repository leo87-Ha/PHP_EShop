<?php 
$db_host = "localhost";
$db_port = "3306";
$db_user = "root";
$db_pass = "123456";
$db_name = "e_commerce";
$charset = "utf8";
//连接数据库
if (!$link = @mysqli_connect($db_host.":".$db_port,$db_user,$db_pass)) {
	echo "<h3>连接失败！！！</h3>";
	echo "ERR".mysql_connect_error();
	die();
}
//选择数据库
if (!mysqli_select_db($link,$db_name)) {
	echo "<h3>选择数据库{$db_name}失败！</h3>";
	die();
}

mysqli_set_charset($link,$charset);//设置字符集
//mysqli_close($link);
session_start();
if(!$_SESSION){
	$_SESSION['home_userid']=NULL;
	$_SESSION['home_username']=NULL;
	$_SESSION['shops']=NULL;
	$_SESSION['goodsNum']=0;
}

 ?>