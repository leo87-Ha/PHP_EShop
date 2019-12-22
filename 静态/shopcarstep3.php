<!DOCTYPE html>
<html>
<head>
	<meta name="head" content="content" charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="public/css/index.css">
	
	<title>购物车</title>
</head>
<body>
<div class="headerBar">
	<div class="topBar">
		<div class="comWidth">
			<div class="leftArea">
				<a href="#" class="collection">收藏</a>
			</div>
			<div class="rightArea">
				欢迎来到###！
				<a href="login.php" class="login">[登录]</a>
				<a href="register.php" class="register">[注册]</a>
			</div>
		</div>
	</div>
	<div class="logoBar">
		<div class="comWidth">
			<div class="logo fl">
				<a href="#" ><img src="public/img/logo.png" alt="乐淘"></a>			
			</div>	
			<div class="stepBox fr">
				<div class="step">
					
				</div>
				<ul class="step_text">
					<a href="shopcarstep1.php" title=""><li class="s01" active>我的购物车</li></a>
					<a href="shopcarstep2.php" title=""><li class="s02" active>填写核对订单</li></a>
					<li class="s03">订单提交成功</li>
				</ul>
			</div>
		</div>
	</div>
<div class="shoppingCart comWidth">
	<div class="shopping_item">
			<h3 class="shopping_tit">提交成功</h3>
			<div class="cart_cont clearfix">
				<div class="cart_cont fl">
					<p>****************</p>
					<p>****************</p>
					<p>****************</p>
				</div>
				<div class="cart_cont fr">
					
					<div class="cart_btnBox" style="margin-bottom: 5px;margin-top: 50px;">
						<a href="personalcenter.php" title=""><input type="button" value="完成交易" class="cart_btn"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
</div>
	<?php include 'footer.php' ?>
</body>
</html>