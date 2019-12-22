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
				<a href="index.php" ><img src="public/img/logo.png" alt="乐淘"></a>			
			</div>	
			<div class="stepBox fr">
				<div class="step">
					
				</div>
				<ul class="step_text">
					<a href="shopcarstep1.php" title=""><li class="s01" active>我的购物车</li></a>
					<li class="s02" active>填写核对订单</li>
					<li class="s03">订单提交成功</li>
				</ul>
			</div>
		</div>
	</div>
<div class="shoppingCart comWidth">
	<div class="shopping_item">
		
		<h3 class="shopping_tit">我的购物车</h3>
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
						<li><input type="radio" class="radio" id="rs"><label for="rs">选择</label></li>
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
					<div class="cart_item des_number">
						<div class="reduction">-</div>
						<div class="des_input"><input type="text" value="1"></div>
						<div class="plus">+</div>
					</div>
					<div class="cart_item t_subtotal s_1" style="text-align: center;">1196.00</div>
				</div>
				<div class="delete_btnBox">
					<input type="button" class="delete_btn fr" value="删除">
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

				<div class="cart_head clearfix">
					<div class="cart_item t_name">商品名称</div>
					<div class="cart_item t_price">单价</div>
					<div class="cart_item t_return">优惠</div>
					<div class="cart_item t_num">数量</div>
					<div class="cart_item t_subtotal">小计</div>
				</div>
				<div class="cart_cont cart_no_bor clearfix">
					<div class="cart_item t_name">
						<li><input type="radio" class="radio" id="rs"><label for="rs">选择</label></li>
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
					<div class="cart_item des_number">
						<div class="reduction">-</div>
						<div class="des_input"><input type="text" value="1"></div>
						<div class="plus">+</div>
					</div>
					<div class="cart_item t_subtotal s_1" style="text-align: center;">1196.00</div>
				</div>
				<div class="delete_btnBox">
					<input type="button" class="delete_btn fr" value="删除">
				</div>
				<div class="cart_message">
					## # # #  ##
				</div>
				
			</div>
			<div class="hr_15"></div>
			<h3 class="shopping_tit">订单金额</h3>
			<div class="cart_cont clearfix">
				<div class="cart_cont fr">
					<div class="cart_rmb">
						总计： <span>￥1196.00</span>
					</div>
					<div class="cart_btnBox">
						<a href="shopcarstep2.php" title=""><input type="button" value="下一步" class="cart_btn"></a>
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