<!DOCTYPE html>
<html>
<head>
	<meta name="head" content="content" charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="public/css/index.css">
	<title>联系方式</title>
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
	height: 300px;
	}
	table {
		border :solid 1px #ccc;
	}
	table tr td{
		border-top: 1px dashed #CCC;
	}
	table tr{
		height: 30px;
		text-align: center;
		
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
				
			<table width="100%">
				<tr>
					<th><h3>姓名</h3></th>
					<th>地址</th>
					<th>电话</th>
					<th>邮编</th>
					<th>操作</th>
				</tr>
				<tr>
					<td >1</td>
					<td >1</td>
					<td >1</td>
					<td >1</td>
					<td >1</td>
				</tr>
				<tr>
					<td >1</td>
					<td >1</td>
					<td >1</td>
					<td >1</td>
					<td >1</td>
				</tr>
				<tr>
					<td >1</td>
					<td >1</td>
					<td >1</td>
					<td >1</td>
					<td >1</td>
				</tr>
				<tr>
					<td >1</td>
					<td >1</td>
					<td >1</td>
					<td >1</td>
					<td >1</td>
				</tr>
				<tr>
					<td >1</td>
					<td >1</td>
					<td >1</td>
					<td >1</td>
					<td >1</td>
				</tr>
			</table>
			</div>
		</div>
		
		<div hr_7></div>
	</div>
</div>
<?php include 'footer.php' ?>
</body>
</html>