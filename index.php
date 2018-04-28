<?php
require_once "includes/dbconnect.php";
require_once "includes/functions.php";
require_once "includes/library.php";
session_start();
if(!empty($_SESSION['user_id'])){
$userid_wish = $_SESSION['user_id'];
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.easing.min.js"></script>
</head>
<style>

</style>
<body>

<!-- header -->
<?php include_once "header.php";?>
<!-- header-bot -->
<!-- menu -->
<?php include_once "menu.php";?>
<!-- menu -->
<!-- //banner-top -->
<!-- banner -->
<div class="banner-grid">
	<div id="visual">
			<div class="slide-visual">
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					<li><img class="img-responsive" src="images/ba1.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="images/ba2.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="images/ba3.jpg" alt="Dummy Image" /></li>
				</ul>

				<!-- Slide Description Image Area (316 x 328) -->
				<div class="script-wrap">
					<ul class="script-group">
						<li><div class="inner-script"><img class="img-responsive" src="images/baa1.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="images/baa2.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="images/baa3.jpg" alt="Dummy Image" /></div></li>
					</ul>
					<div class="slide-controller">
						<a href="#" class="btn-prev"><img src="images/btn_prev.png" alt="Prev Slide" /></a>
						<a href="#" class="btn-play"><img src="images/btn_play.png" alt="Start Slide" /></a>
						<a href="#" class="btn-pause"><img src="images/btn_pause.png" alt="Pause Slide" /></a>
						<a href="#" class="btn-next"><img src="images/btn_next.png" alt="Next Slide" /></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<script type="text/javascript" src="js/pignose.layerslider.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>

</div>
<!-- //banner -->
<!-- content -->

<div class="new_arrivals" style="display:none">
	<div class="container">
		<h3><span>new </span>arrivals</h3>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
		<div class="new_grids">
			<div class="col-md-4 new-gd-left">
				<img src="images/wed1.jpg" alt=" " />
				<div class="wed-brand simpleCart_shelfItem">
					<h4>Wedding Collections</h4>
					<h5>Flat 50% Discount</h5>
					<p><i>$250</i> <span class="item_price">$500</span><a class="item_add hvr-outline-out button2" href="#">add to cart </a></p>
				</div>
			</div>
			<div class="col-md-4 new-gd-middle">
				<div class="new-levis">
					<div class="mid-img">
						<img src="images/levis1.png" alt=" " />
					</div>
					<div class="mid-text">
						<h4>up to 40% <span>off</span></h4>
						<a class="hvr-outline-out button2" href="product.html">Shop now </a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="new-levis">
					<div class="mid-text">
						<h4>up to 50% <span>off</span></h4>
						<a class="hvr-outline-out button2" href="product.html">Shop now </a>
					</div>
					<div class="mid-img">
						<img src="images/dig.jpg" alt=" " />
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 new-gd-left">
				<img src="images/wed2.jpg" alt=" " />
				<div class="wed-brandtwo simpleCart_shelfItem">
					<h4>Spring / Summer</h4>
					<p>Shop Men</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //content -->

<!-- content-bottom -->

<div class="content-bottom" style="display:none">
	<div class="col-md-7 content-lgrid">
		<div class="col-sm-6 content-img-left text-center">
			<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="images/p1.jpg" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
									<h4>Mobiles</h4>
									<span class="separator"></span>
									<p><span class="item_price">$500</span></p>
									<span class="separator"></span>
									<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
						</div>
					</div>
			</div>
		</div>
		<div class="col-sm-6 content-img-right">
			<h3>Special Offers and 50%<span>Discount On</span> Mobiles</h3>
		</div>

		<div class="col-sm-6 content-img-right">
			<h3>Buy 1 get 1  free on <span> Branded</span> Watches</h3>
		</div>
		<div class="col-sm-6 content-img-left text-center">
			<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="images/p2.jpg" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
							<h4>Watches</h4>
							<span class="separator"></span>
							<p><span class="item_price">$250</span></p>
							<span class="separator"></span>
							<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
						</div>
					</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-5 content-rgrid text-center">
		<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="images/p4.jpg" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
									<h4>Shoes</h4>
									<span class="separator"></span>
									<p><span class="item_price">$150</span></p>
									<span class="separator"></span>
									<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
						</div>
					</div>
			</div>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //content-bottom -->
<!-- product-nav -->

<div class="product-easy">
	<div class="container">

		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});

		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Products</span></li>
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li>
				</ul>
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">


<?php
$select = "select prod_id,prod_name,prod_sp,prod_mrp,prod_image,prod_available_quantity from e_products_tbl where latest_prod = 1";
$rs = mysql_query($select);
while($row = mysql_fetch_assoc($rs)){
 ?>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
                  <i class="fas fa-heart" style="color:red;"></i>
                  <a href="#" id="wishlist">
       <span class="glyphicon glyphicon-heart" style="color:orange;font-size:32px;text-shadow:3px 3px 10px silver;"></span>
     </a>

<?php
$prod_id = $row['prod_id'];
?>

		<img src="admin/uploads/<?php echo $row['prod_image']; ?>" alt="img here" class="pro-image-front">
		<img src="admin/uploads/<?php echo $row['prod_image']; ?>" alt="img here" class="pro-image-back">

										<div class="men-cart-pro">

											<div class="inner-men-cart-pro">
                        <?php
                        if(!empty($_SESSION['user_id'])){
                          ?>
                        <a href="#" style="margin-left:-6cm;" onclick="wishlist(<?php echo $userid_wish;?>,<?php echo $prod_id;?>)" id="wishlist">
                        <?php
                      }else{
                        ?>
                        <a href="login.php" style="margin-left:-6cm;" onclick="wishlist(<?php echo $userid_wish;?>,<?php echo $prod_id;?>)" id="wishlist">
                      <?php
                    }
                    ?>
      <span class="glyphicon glyphicon-heart" style="color:orange;font-size:32px;text-shadow:3px 3px 10px silver;"></span>
           </a>

												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
			<h4>
			<a href="single.html">
				<?php
				$prod_name = ucfirst(substr($row['prod_name'],0,20));
				$len = strlen($row['prod_name']);

				?>
				<?php echo $prod_name; if($len > 20) {echo '..';}?>
			</a></h4>
			<div class="info-product-price">
				<span class="item_price">Rs. <?php echo $row['prod_sp'];?></span>
				<del>Rs. <?php echo $row['prod_mrp'];?></del>
			</div>
			<div class="info-product-price">
				<?php
				$qty = $row['prod_available_quantity'];
				if($qty == 1){
				?>
<span class="item_price" style="font-size:16px;color:red;margin-left:4cm;">Available : <?php echo $qty;?></span>
<?php
}else if($qty > 1 && $qty < 4){
 ?>
<span class="item_price" style="font-size:16px;color:orange;margin-left:4cm;">Available : <?php echo $qty;?></span>
 <?php
}else{
  ?>
	<span class="item_price" style="font-size:16px;color:green;margin-left:4cm;">Available : <?php echo $qty;?></span>
<?php
}
 ?>

			</div>
<a href="addtocart.php?lid=<?php echo $row['prod_id'];?>" class="item_add single-item hvr-outline-out button2">Add to cart</a>


								</div>
							</div>
						</div>
<?php
}
 ?>


					<div class="clearfix"></div>
					</div>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">

<?php
$special_prod = "select prod_id,prod_name,prod_sp,prod_mrp,prod_image,prod_available_quantity from e_products_tbl where special_prod = 1";
$query = mysql_query($special_prod);
while($sp = mysql_fetch_assoc($query)){
 ?>

						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="admin/uploads/<?php echo $sp['prod_image']; ?>" alt="img" class="pro-image-front">
									<img src="admin/uploads/<?php echo $sp['prod_image']; ?>" alt="img" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4 style="color:orange;">
                    <a href="single.html">
                    <?php
            				$sp_name = ucfirst(substr($sp['prod_name'],0,20));
            				$len = strlen($sp['prod_name']);
            				?>
            				<?php echo $sp_name; if($len > 20) {echo '..';}?>
                  </a></h4>
									<div class="info-product-price">

										<span class="item_price">Rs. <?php echo $sp['prod_sp']; ?></span>
										<del>Rs. <?php echo $sp['prod_mrp']; ?></del>
									</div>

									<div class="info-product-price">
										<?php
										$qtyy = $sp['prod_available_quantity'];
										if($qtyy == 1){
										?>
									<span class="item_price" style="font-size:16px;color:red;margin-left:4cm;">Available : <?php echo $qtyy;?></span>
									<?php
								}else if($qtyy > 1 && $qty < 4){
									?>
									<span class="item_price" style="font-size:16px;color:orange;margin-left:4cm;">Available : <?php echo $qtyy;?></span>
									<?php
									}else{
									?>
									<span class="item_price" style="font-size:16px;color:green;margin-left:4cm;">Available : <?php echo $qtyy;?></span>
									<?php
									}
									?>
									</div>

									<a href="addtocart.php?lid=<?php echo $sp['prod_id'];?>" class="item_add single-item hvr-outline-out button2">Add to cart</a>
								</div>
							</div>
						</div>
<?php
}
 ?>

						<div class="clearfix"></div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- //product-nav -->

<div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>Buy your product in a simple way</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>LOGIN TO YOUR ACCOUNT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- footer -->
<?php include_once "footer.php";?>
<!-- //footer -->
<!-- login -->

<!-- //login -->
</body>
<script>
function wishlist(userid,prodid)
{

  var obj;
	if(window.XMLHttpRequest)
	obj=new XMLHttpRequest;
	else
	obj=new ActiveXObject('Microsoft.XMLHTTP');
	obj.onreadystatechange=function(){
			if(this.readyState==4)
	//document.getElementById('wishlist').innerHTML=
	var check = this.responseText;
  alert(check);
		};
	obj.open('GET','addtowishlist.php?userid='+userid+'&prodid='+prodid,true);
	obj.send();
}
</script>
</html>
