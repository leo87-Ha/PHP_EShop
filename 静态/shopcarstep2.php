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
					<li class="s01" active>我的购物车</li>
					<li class="s02" active>填写核对订单</li>
					<li class="s03">订单提交成功</li>
				</ul>
			</div>
		</div>
	</div>
<div class="shoppingCart comWidth">
	<div class="shopping_item">
		<h3 class="shopping_tit">收货信息</h3>
		<div class="shopping_cont padding_shop">
			<ul class="shopping_list">
				<li><span class="shopping_list_text"><em>* </em>选择地区：</span>
					<div class="select">
					<h3>洛阳市 洛龙区</h3><span></span>
					<ul class="show_select">
						<li>???</li>
						<li>???</li>
						<li>???</li>
						<li>???</li>
					</ul> 
				</div></li>
				<li><span class="shopping_list_text"><em>* </em>详细地址：</span><input type="text" value="最多输入20个汉字" class="input input_b"></li>
				<li><span class="shopping_list_text"><em>* </em>收货人：</span><input type="text" value="最多10个" class="input"></li>
				<li><span class="shopping_list_text"><em>* </em>手  机：</span><input type="text" value="如13312341234" class="input"></li>
				<li><input type="button" class="affirm"></li>
			</ul>
		</div>
		<div class="hr_15"></div>
		<h3 class="shopping_tit">支付方式</h3>
		<div class="shopping_cont padding_shop">
			<ul class="shopping_list">				
				<li><input type="radio" class="radio" id="r1"><label for="r1">微信支付</label>微信支付</li>
				<li><input type="radio" class="radio" id="r2"><label for="r2">货到付款</label>货到付款</li>
			</ul>
		</div>
		<div class="hr_15"></div>
		<h3 class="shopping_tit">送货清单 <a href="shopcarstep1.php" class="backCar">返回购物车修改</a></h3>
		<div class="shopping_cont pb_10">
			<div class="cart_inner">
				<div class="cart_head clearfix">
					<div class="cart_item t_name">商品名称</div>
					<div class="cart_item t_price">单价</div>
					<div class="cart_item t_return">优惠</div>
					<div class="cart_item t_num">数量</div>
					<div class="cart_item t_subtotal">小计</div>
				</div>
				<div class="cart_cont cart_no_bor clearfix">
					<div class="cart_item t_name">
						<div class="cart_shopInfo">
							<img src="" alt="">
							<div class="cart_shopInfo_cont">
								<p class="cart_link"><a href="#">##########</a></p>
								<p class="cart_info">##########</p>
							</div>
						</div>
					</div>
					<div class="cart_item t_price">1234.00</div>
					<div class="cart_item t_return">38.00</div>
					<div class="cart_item t_num">1</div>
					<div class="cart_item t_subtotal clearfix">1196.00</div>
				</div>
				<div class="cart_message">
					## # # #  ##
				</div>
				<div class="cart_prompt">
					<i class="cart_prompt_icon"></i>抱歉，*********
				</div>
					<div class="cart_cont clearfix">
					<div class="cart_item t_name">
						<div class="cart_shopInfo">
							<img src="" alt="">
							<div class="cart_shopInfo_cont">
								<p class="cart_link"><a href="#">******</a></p>
								<p class="cart_info">******</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hr_15"></div>
			<h3 class="shopping_tit">订单结算</h3>
			<div class="cart_cont clearfix">
				<div class="cart_cont fr">
					<div class="cart_rmb">
						总计： <span>￥1196.00</span>
					</div>
					<div class="cart_btnBox">
						<a href="shopcarstep3.php" title=""><input type="button" value="提交订单" class="cart_btn"></a>
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