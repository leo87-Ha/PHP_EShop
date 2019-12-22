<?php 
//取路径
$path=$_SERVER['PHP_SELF'];
$arr=explode('/', $path);
$root='/'.$arr[0];
 ?>

<div class="headerBar">
	<div class="topBar">
		<div class="comWidth">
			<div class="leftArea">
				<a href="#" class="collection">收藏</a>
			</div>
			<?php 
			if(!$_SESSION['home_userid']){ ?>
			<div class="rightArea">
				欢迎来到###！
				<a href="<?php echo $root ?>login.php" class="login">[登录]</a>
				<a href="<?php echo $root ?>register.php" class="register">[注册]</a>
			</div>
		<?php } else {	?>
			<div class="rightArea">
				 <?php echo $_SESSION['home_username'] ?>欢迎来到###！
				<a href="<?php echo $root ?>personalcenter.php?c=wel" class="login">[个人中心]</a>
				<a href="logout.php" class="register">[退出]</a>
			</div>
		<?php } ?> 
		
			
			
				
		</div>
	</div>
</div>
<div class="logoBar">
	<div class="comWidth">
		<div class="logo fl">
			<a href="index.php" ><img src="<?php echo $root ?>public/img/logo.png" alt="乐淘"></a>			
		</div>	
		<div class="search_box fl">
			<input type="text" name="search" class="search_text fl">
			<input type="button" name="searchBtn" value="搜 索" class="search_btn fr" >		
		</div>	
		<div class="shopCar fr">
				<a href="<?php echo $root ?>shopcarstep1.php" title=""><span class="shopText fl">购物车</span></a>
				<span class="shopNum fl"><?php echo $_SESSION['goodsNum']; ?></span>
		</div>	
	</div>
</div>

<div class="header-wrap">
	<div class="navwrap">
		<div id="nav">
			<div class="navbar clearfix">
				<a class="current" href="#">首页</a>
				<a href="#">餐饮美食</a>
				<a href="#">休闲娱乐</a>
				<a href="#">旅游住宿</a>
				<a href="#">生活服务</a>
				<a href="#">商品</a>
			</div>
			<div class="pros subpage fl">
				<h2>全部团购分类</h2>
				<ul class="prosul clearfix" id="proinfo">
					<li class="food">
						<i>&gt;</i>
						<a class="ti" href="#">美食</a>
						<a href="#">火锅</a>
						<div class="prosmore hide">
							<span><em><a href="#">全部(117)</a></em></span>
							<span><em class="morehot"><a class="morehot" href="#">火锅(17)</a></em></span>
							<span><em class="morehot"><a class="morehot" href="#">烧烤(16)</a></em></span>
							<span><em><a href="#">西餐(9)</a></em></span>
							<span><em><a href="#">海鲜(37)</a></em></span>
							<span><em><a href="#">地方菜(5)</a></em></span>
							<span><em><a href="#">日韩料理(2)</a></em></span>
							<span><em><a href="#">快餐(2)</a></em></span>
							<span><em class="morehot"><a class="morehot" href="#">蛋糕(9)</a></em></span>
							<span><em><a href="#">其他(7)</a></em></span>
							<span><em><a href="#">下午茶(5)</a></em></span>
							<span><em><a href="#">咖啡(8)</a></em></span>
						</div>
					</li>
					<li class="enjoy">
						<i>&gt;</i>
						<a class="ti" href="#">休闲</a>
						<a href="#">KTV</a>
						<div class="prosmore hide">
							<span><em><a href="#">全部(663)</a></em></span>
							<span><em class="morehot"><a class="morehot" href="#">电影(18)</a></em></span>
							<span><em class="morehot"><a class="morehot" href="#">KTV(8)</a></em></span>
							<span><em><a href="#">运动健身(95)</a></em></span>
							<span><em><a href="#">游乐电玩(48)</a></em></span>
							<span><em><a href="#">展览演出(13)</a></em></span>
							<span><em class="morehot"><a class="morehot" href="#">足疗按摩(8)</a></em></span>
							<span><em><a href="#">洗浴(11)</a></em></span>
							<span><em><a href="#">其他(29)</a></em></span>
							<span><em><a href="#">采摘(2)</a></em></span>
							<span><em><a href="#">滑雪(4)</a></em></span>
							<span><em><a href="#">温泉(427)</a></em></span>
						</div>
					</li>
					<li class="travel">
						<i>&gt;</i>
						<a class="ti" href="#">旅游</a>
						<a href="#">旅游</a>
						<div class="prosmore hide">
							<span><em><a href="#">全部(13602)</a></em></span>
							<span><em class="morehot"><a class="morehot" href="#">酒店(9044)</a></em></span>
							<span><em><a href="#">旅游(1775)</a></em></span>
							<span><em><a href="#">景点公园(935)</a></em></span>
							<span><em><a href="#">其他(1848)</a></em></span>
						</div>
					</li>
					<li class="life">
						<i>&gt;</i>
						<a class="ti" href="#">生活</a>
						<a href="#">婚纱摄影</a>
						<div class="prosmore hide">
							<span><em><a href="#">全部(333)</a></em></span>
							<span><em><a href="#">写真(9)</a></em></span>
							<span><em class="morehot"><a class="morehot" href="#">婚纱摄影(212)</a></em></span>
							<span><em><a href="#">儿童摄影(1)</a></em></span>
							<span><em><a href="#">汽车养护(3)</a></em></span>
							<span><em><a href="#">教育培训(91)</a></em></span>
							<span><em><a href="#">体检(8)</a></em></span>
							<span><em><a href="#">口腔(1)</a></em></span>
							<span><em><a href="#">其他(8)</a></em></span>
						</div>
					</li>
					<li class="goods bd-solid">
						<i>&gt;</i>
						<a class="ti" href="#">商品</a>
						<a href="#">服装</a>
						<a href="#">鞋靴</a>
						<div class="prosmore hide">
							<span><em><a href="#">全部(112343)</a> </em></span>
							<span><em class="morehot"><a class="morehot" href="#">服装(32747)</a> </em></span>
							<span><em><a href="#">生活家居(14441)</a> </em></span>
							<span><em><a href="#">食品饮料(10116)</a> </em></span>
							<span><em><a href="#">化妆品(12707)</a> </em></span>
							<span><em><a href="#">箱包(7621)</a> </em></span>
							<span><em><a href="#">家用电器(3775)</a> </em></span>
							<span><em><a href="#">手机数码(3639)</a> </em></span>
							<span><em><a href="#">鞋靴(11686)</a> </em></span>
							<span><em><a href="#">饰品(4558)</a> </em></span>
							<span><em><a href="#">手表(1482)</a> </em></span>
							<span><em><a href="#">母婴用品(3659)</a> </em></span>
							<span><em><a href="#">玩具(777)</a> </em></span>
							<span><em><a href="#">抽奖(7)</a> </em></span>
							<span><em><a href="#">礼品(197)</a> </em></span>
							<span><em><a href="#">其他(4931)</a> </em></span>
						</div>
					</li>
					<li class="hotareas nochild last">
						<h2>热门搜索</h2>
						<br />
						<a class="mhs" href="#">手机</a>
						<a class="mhs" href="#">电脑</a>
						<a class="mhs" href="#">空调</a>
						<a class="mhs" href="#">智能手表</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<script src="public/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
	(function(){
		
		var $subblock = $(".subpage"), $head=$subblock.find('h2'), $ul = $("#proinfo"), $lis = $ul.find("li"), inter=false;
		
		$head.click(function(e){
			e.stopPropagation();
			if(!inter){
				$ul.show();
			}else{
				$ul.hide();
			}
			inter=!inter;
		});
		
		$ul.click(function(event){
			event.stopPropagation();
		});
		
		$(document).click(function(){
			$ul.hide();
			inter=!inter;
		});

		$lis.hover(function(){
			if(!$(this).hasClass('nochild')){
				$(this).addClass("prosahover");
				$(this).find(".prosmore").removeClass('hide');
			}
		},function(){
			if(!$(this).hasClass('nochild')){
				if($(this).hasClass("prosahover")){
					$(this).removeClass("prosahover");
				}
				$(this).find(".prosmore").addClass('hide');
			}
		});
		
	})();
</script>