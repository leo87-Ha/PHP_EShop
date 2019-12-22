<?php 
include 'public/config.php';
//取路径
$path=$_SERVER['PHP_SELF'];
$arr=explode('/', $path);
$root='/'.$arr[0];

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="head" content="content" charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo $root ?>public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root ?>public/css/index.css">
	
	<title>首页</title>
</head>
<body>
<?php include 'header.php' ?>
<div class="banner comWidth clearfix">
	<div class="banner_bar banner_big">
		<ul class="imgBox">
			<li><a href="products.php"><img src="<?php echo $root ?>public/img/banner/banner_01.jpg" alt="banner"></a></li>
			<li><a href="#"><img src="<?php echo $root ?>public/img/banner/banner_02.jpg" alt="banner"></a></li>
		</ul>
		<div class="imgNum">
			<a href="#" class="active"></a><a href="#"></a><a href="#"></a><a href="#"></a>
		</div>
	</div>
</div>


<div class="shopTit comWidth">
	<span class="icon"></span><h3>热卖电脑</h3>
	<a href="#" class="more">更多&gt;&gt;</a>
</div>
<div class="shopList comWidth clearfix">
	<div class="leftArea">
		<div class="banner_bar banner_sm">
			<ul class="imgBox">
				<li><a href="#"><img src="<?php echo $root ?>public/img/banner/banner_sm_01.jpg" alt="banner"></a></li>
				<li><a href="#"><img src="<?php echo $root ?>public/img/banner/banner_sm_02.jpg" alt="banner"></a></li>
			</ul>
			<div class="imgNum">
				<a href="#" class="active"></a><a href="#"></a><a href="#"></a><a href="#"></a>
			</div>
		</div>
	</div>
	<div class="rightArea">
		<div class="shopList_top clearfix">
		 
			<div class="shop_item">
				<div class="shop_img">
				 <a href="#" title=""><img src="" alt=""></a>
				</div>
				<h6>##6##</h6>
				<p>##$$##</p>
			</div>
 
		</div>
		<div class="shopList_sm clearfix">
		
			<div class="shopItem_sm">
				<div class="shopItem_smImg">
					 <a href="#" target="#"><img height="95" width="95" src=" " alt=""></a>
				</div>
				<div class="shopItem_text">
				    <p>###??</p>
					<h3>￥??</h3>
				</div>
			</div>
			 
		</div>
	</div>
</div>
<div class="allFloor">
	<div class="F1">
		<div class="Fhead">
			<div class="left">
				<span><h2>1F ###</h2></span>
			</div>
			<div class="right">
				<span><a href="#" title="">更多&gt;&gt;</a></span>
			</div>
		</div>
		<div class="Ffooter">
			<div class="sell">
				<div class="shopImg">
					<img src="<?php echo $root ?>public/img/shop_img01.png" alt="">
				</div>

				<div class="shopInfo">
					<span>###</span>
					<span>****</span>
					<div class="shopPrice fr">
						<span>$$$</span>
					</div>
				</div>	
			</div>
			
		</div>
	</div>
	<div class="nav_f">
</div>
<?php include 'footer.php' ?>
</body>
</html>