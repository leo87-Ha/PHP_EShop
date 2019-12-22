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
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<script type="text/javascript" src="public/js/jquery.min.js"></script>
	<script type="text/javascript" src="public/js/banner_script.js"></script>
	<title>首页</title>
</head>
<body>
<script type="text/javascript" >
	    var index=0;
    //改变图片
    function ChangeImg() {
        index++;
        var a=document.getElementsByClassName("img-slide");
        if(index>=a.length) index=0;
        for(var i=0;i<a.length;i++){
            a[i].style.display='none';
        }
        a[index].style.display='block';
    }
    //设置定时器，每隔两秒切换一张图片
    setInterval(ChangeImg,3000);

</script>
<?php include 'header.php' ?>
<div class="banner comWidth clearfix">
	<div class="banner_bar banner_big">
		<div class="wrap">
			<div class="pic1 pic">
				<div class="pic_num1 pic_num"></div>
			</div>
			<div class="pic2 pic">
				<div class="pic_num2 pic_num"></div>
			</div>
			<div class="pic3 pic">
				<div class="pic_num3 pic_num"></div>
			</div>
			<div class="pic4 pic">
				<div class="pic_num4 pic_num"></div>
			</div>
			<div class="pic5 pic">
				<div class="pic_num5 pic_num"></div>
			</div>
			<div class="pic6 pic">
				<div class="pic_num6 pic_num"></div>
			</div>
		</div>
	</div>
</div>
 
<?php 
	$floor=1;
	$sqlClass="select *from class";
	$rstClass=mysqli_query($link,$sqlClass);
	while ($rowClass = mysqli_fetch_assoc($rstClass)) {
?>
<div class="shopTit comWidth">
	<span class="icon"></span><h3><?php echo $rowClass['classname']; ?>专区</h3>
	<a href="products.php?class_id=<?php echo $rowClass['id'] ?>" class="more">更多&gt;&gt;</a>
</div>

<div class="shopList comWidth clearfix">
	<div class="leftArea">
		<div class="banner_bar banner_sm">
			<ul class="imgBox">
				<li><a href="#"><img src="<?php echo $root ?>public/img/banner/banner_sm_01.jpg" alt="1" class="img-slide"></a></li>
				<li><a href="#"><img src="<?php echo $root ?>public/img/banner/banner_sm_02.jpg" alt="2" class="img-slide"></a></li>
			</ul>
		</div>

	</div>
	<div class="rightArea">
		
		<div class="shopList_top clearfix">
		<?php 
			$sqlGoods="select goods.id,goodsname,img,price,brandname from goods,brand,class where goods.brand_id=brand.id and brand.class_id=class.id and class.id={$rowClass['id']} and goods.shelf=1 order by rand() limit 8";
			$rstGoods=mysqli_query($link,$sqlGoods);
			while ($rowGoods = mysqli_fetch_assoc($rstGoods)) {		?> 
			<div class="shop_item">
				<div class="shop_img">
				 <a href="proDetails.php?goods_id=<?php echo $rowGoods['id'] ?>" title=""><img src="<?php echo $root ?>public/img/<?php echo $rowGoods['img']?>"></a>
				</div>
				<h6><?php echo $rowGoods['goodsname'] ?></h6>
				<p>￥<?php echo $rowGoods['price'] ?></p>
			</div>
 				<?php }	 ?>
		</div>
<!--	<div class="shopList_sm clearfix">
		
			<div class="shopItem_sm">
				<div class="shopItem_smImg">
					 <a href="#" target="proDetails.php?goods_id=<?php echo $rowGoods['id'] ?>"><img max-height="95px" max-width="95px" src="<?php echo $root ?>public/img/<?php echo $rowGoods['img']?>"></a>
				</div>
				<div class="shopItem_text">
				    <p><?php echo $rowGoods['goodsname'] ?></p>
					<h6><?php echo $rowGoods['price'] ?></h6>
				</div>
			</div>
		</div>
-->
	</div>
</div>
	<?php 	$floor++;	}	 ?>
	<div class="nav_f"></div>
<script type="text/javascript" src="public/js/tyshuiyin.js" ></script>
<?php include 'footer.php' ?>
</body>
</html>