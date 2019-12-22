<!DOCTYPE html>
<html>
<head>
	<meta name="head" content="content" charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="public/css/index.css">
	<title>个人中心</title>
</head>
<body>
<?php include 'header.php' ?>
<style type="text/css" media="screen">
	.shopClass_show ,.navBox {visibility: hidden;}
	.personal a:hover{
	color: red;
	text-decoration:underline;
	}
	.showAll{
	background-color:pink;
	 
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
			<div class="show">
				<h3>欢迎界面</h3>
			</div>
			<div class="show1">
				<h3>########</h3>
			</div>
			<div class="show2">
				<h3>########</h3>
			</div>
			<div class="show3">
				<h3>########</h3>
			</div>
		</div>
		
		<div hr_7></div>
	</div>
</div>
<?php include 'footer.php' ?>
</body>
</html>