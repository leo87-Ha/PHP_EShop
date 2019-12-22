<!DOCTYPE html>
<html>
<head>
	<meta name="head" content="content" charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="public/css/index.css">
	<title>我的订单</title>
</head>
<body>
<?php include 'header.php' ?>
<style type="text/css" media="screen">
	.shopClass_show ,.navBox {visibility: hidden;}
	.personal a:hover{
	color: red;
	text-decoration:underline;
	}
	p {
		margin: 5px;
		height: 20px;
		font-family: "Microsoft YaHei", "微软雅黑";
	}
	.addAddreess{margin-left: 50px;}
	p input {
		border:1px solid #999;
	}
	.showAll{
 
	height: 300px;
	}
</style>
<div class="comWidth clearfix products">
	<div class="leftArea">
		<div class="leftNav vertical ">
			<h3 class="nav_title">个人中心</h3>
			<div class="nav_cont personal">
									<h3></h3>
				<a href="useraddr.php" title=""><h3>查看联系方式</h3></a>
									<h3></h3>
				<a href="userlist.php" title=""><h3>添加联系方式</h3></a>
									<h3></h3>
				<a href="orderlist.php" title=""><h3>查看我的订单</h3></a>
									<h3></h3>
			</div>
		</div>
	</div>

	<div class="rightArea">
		<div class="showAll">
			<div class="addAddreess">
				<div class=" ">
					<p>姓名：</p>
					<p><input type="text" name="username"></p>
					<p>地址：</p>
					<p><input type="text" name="address"></p>
					<p>电话：</p>
					<p><input type="text" name="phonenum"></p>
					<p>邮编：</p>
					<p><input type="text" name="mailadd"></p>
					<p class="submit"><input type="submit" name="ok" value="提交"></p>
				</div>
			</div>
		</div>
		
		<div hr_7></div>
	</div>
</div>
<?php include 'footer.php' ?>
</body>
</html>