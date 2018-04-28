<?php
require_once "includes/dbconnect.php";
require_once "includes/functions.php";
require_once "includes/library.php";
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Electronics :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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
<style>
input[type=checkbox]{
	width:15px;
	height:15px;
}
</style>
</head>
<body>
<!-- header -->
<div class="header">
	<div class="container">
		<ul>
			<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
			<li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
			<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.html"><img src="images/logo3.jpg"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
			<form>
				<div class="search">
					<input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
				</div>
				<div class="section_room">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">All categories</option>
						<option value="null">Electronics</option>
						<option value="AX">kids Wear</option>
						<option value="AX">Men's Wear</option>
						<option value="AX">Women's Wear</option>
						<option value="AX">Watches</option>
					</select>
				</div>
				<div class="sear-sub">
					<input type="submit" value=" ">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>

				</li>
				<li><a class="fb" href="#"></a></li>
				<li><a class="twi" href="#"></a></li>
				<li><a class="insta" href="#"></a></li>
				<li><a class="you" href="#"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item "><a class="menu__link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">men's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/woo1.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.html">Clothing</a></li>
											<li><a href="mens.html">Wallets</a></li>
											<li><a href="mens.html">Footwear</a></li>
											<li><a href="mens.html">Watches</a></li>
											<li><a href="mens.html">Accessories</a></li>
											<li><a href="mens.html">Bags</a></li>
											<li><a href="mens.html">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.html">Jewellery</a></li>
											<li><a href="mens.html">Sunglasses</a></li>
											<li><a href="mens.html">Perfumes</a></li>
											<li><a href="mens.html">Beauty</a></li>
											<li><a href="mens.html">Shirts</a></li>
											<li><a href="mens.html">Sunglasses</a></li>
											<li><a href="mens.html">Swimwear</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">women's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Clothing</a></li>
											<li><a href="womens.html">Wallets</a></li>
											<li><a href="womens.html">Footwear</a></li>
											<li><a href="womens.html">Watches</a></li>
											<li><a href="womens.html">Accessories</a></li>
											<li><a href="womens.html">Bags</a></li>
											<li><a href="womens.html">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Jewellery</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Perfumes</a></li>
											<li><a href="womens.html">Beauty</a></li>
											<li><a href="womens.html">Shirts</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="images/woo.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class=" menu__item menu__item--current"><a class="menu__link" href="electronics.html">Electronics</a></li>
					<li class=" menu__item"><a class="menu__link" href="codes.html">Short Codes</a></li>
					<li class=" menu__item"><a class="menu__link" href="contact.html">contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
		</div>
		<div class="top_nav_right">
			<div class="cart box_1">
						<a href="checkout.html">
							<h3> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>

							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Electronics</h3>
	</div>
</div>
<!-- //banner -->
<!-- Electronics -->
<div class="electronics" >
	<div class="container-fluid">
		<div class="col-md-8 electro-left text-center" style="display:none">
			<div class="electro-img-left mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/watch.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Branded Watches</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>
			<div class="electro-img-btm-left mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/e1.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Mobiles</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>
			<div class="electro-img-btm-right mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/e2.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Branded Watches</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 electro-right text-center" style="display:none">
			<div class="electro-img-rt mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="images/e4.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>Mobiles</h4>
								<span class="separator"></span>
								<p><span class="item_price">$500</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="#">add to cart </a>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
<br>
		<div class="row">
			<h3 style="text-transform:uppercase;text-align:center;text-transform:capitlize;"><span style="color:orange;">Latest </span>Collections</h3>

			<div class="col-sm-3">
				<div style="width:300px;line-height:30px;border:2px solid orange;margin-top:2.3cm;border-radius:5px;box-shadow:5px 5px 20px silver;">
<h3 style="background:orange;padding:10px;color:#464141;">Price Range</h3>
<div style="width:300px;height:300px;overflow-y:scroll;color:#464141;box-shadow:inset 5px 5px 20px silver;padding:30px;">
	<input type="text" placeholder="MIN" style="width:50px;">&nbsp&nbsp&nbsp&nbsp<input type="text" placeholder="MAX" style="width:50px;">&nbsp&nbsp&nbsp&nbsp
	<input type="submit" value="search" style="border:none;color:white;box-shadow:2px 2px 5px silver;background:orange;"><br>
<br>
<input type="checkbox" name="price[]" value="">Upto 1000<br>
<input type="checkbox" name="price[]" value="1000,2000">1000 - 2000<br>
<input type="checkbox" name="price[]" value="2000,5000">2000 - 5000<br>
<input type="checkbox" name="price[]" value="5000,20000">5000 - 20000<br>
<input type="checkbox" name="price[]" value="20000,50000">20000 - 50000<br>
<input type="checkbox" name="price[]" value="20000,50000">20000 - 50000<br>
<input type="checkbox" name="price[]" value="50000,100000">50000 - 100000<br>
<input type="checkbox" name="price[]" value="100000,200000">100000 - 200000<br>
<input type="checkbox" name="price[]" value="200000,500000">200000 - 500000<br>
</div>


<h3 style="background:orange;color:#464141;margin-top:1cm;padding:10px;">Categories</h3>
<div style="width:300px;color:#464141;height:300px;overflow-y:scroll;box-shadow:inset 5px 5px 20px silver;padding:30px;">
<?php
$categories = get_categories();
while($cats = mysql_fetch_assoc($categories)){
?>
	<input type="checkbox" name="cids[]" value="<?php echo $cats['cat_id'];?>" class="prod_ids"><?php echo ucfirst($cats['cat_name']);?><br>
<?php
}
 ?>
</div>

<h3 style="background:orange;color:#464141;margin-top:1cm;padding:10px;">Brands</h3>
<div style="width:300px;height:300px;overflow-y:scroll;color:#464141;box-shadow:inset 5px 5px 20px silver;padding:30px;">
<?php
$sub_categories = get_sub_categories();
while($sub_cats=mysql_fetch_assoc($sub_categories)){
 ?>
<input type="checkbox" name="price[]" value=""><?php echo $sub_cats['sub_cat_name'];?><br>
<?php
}
 ?>
</div>

</div>
			</div>
			<div class="col-sm-9" >
<div style="height:2.5cm;"></div>
<div id="products_result">
				<?php
				$select = "select prod_id,prod_name,prod_sp,prod_mrp,prod_image,prod_available_quantity from e_products_tbl where latest_prod = 1";
				$rs = mysql_query($select);
				while($row = mysql_fetch_assoc($rs)){
				 ?>
										<div class="col-md-4 product-men">
											<div class="men-pro-item simpleCart_shelfItem">
												<div class="men-thumb-item">

						<img src="admin/uploads/<?php echo $row['prod_image']; ?>" alt="img here" class="pro-image-front">
						<img src="admin/uploads/<?php echo $row['prod_image']; ?>" alt="img here" class="pro-image-back">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.php?prod_id=<?php echo $row['prod_id'];?>" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>

												</div>
												<div class="item-info-product ">
							<h4>
							<a href="single.php">
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
</div>
</div>
		</div>
	</div>
</div>
<!-- //Electronics -->
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
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left" style="display:none">
			<h2><a href="index.html"><img src="images/logo3.jpg" alt=" " /></a></h2>
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non
			numquam eius modi tempora incidunt ut labore
			et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<div class="col-md-9 footer-right" style="display:none">
			<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Information</h4>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="mens.html">Men's Wear</a></li>
						<li><a href="womens.html">Women's Wear</a></li>
						<li><a href="electronics.html">Electronics</a></li>
						<li><a href="codes.html">Short Codes</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>

				<div class="col-md-4 sign-gd-two">
					<h4>Store Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 1234k Avenue, 4th block, <span>Newyork City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-4 sign-gd flickr-post">
					<h4>Flickr Posts</h4>
					<ul>
						<li><a href="single.php"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2016 Smart Shop. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>

</body>
<script>
function get_all_products(pids)
{
	var obj;
	if(window.XMLHttpRequest)
	obj=new XMLHttpRequest;
	else
	obj=new ActiveXObject('Microsoft.XMLHTTP');
	obj.onreadystatechange=function(){
			if(this.readyState==4)
	document.getElementById('products_result').innerHTML=
	this.responseText;
		};
	obj.open('GET','all_prod.php?pids='+pids,true);
	obj.send();
}
</script>
<script>
function get_products(pids)
{
	var obj;
	if(window.XMLHttpRequest)
	obj=new XMLHttpRequest;
	else
	obj=new ActiveXObject('Microsoft.XMLHTTP');
	obj.onreadystatechange=function(){
			if(this.readyState==4)
	document.getElementById('products_result').innerHTML=
	this.responseText;
		};
	obj.open('GET','product_filter.php?pids='+pids,true);
	obj.send();
}
</script>
<script src="js/jquery-2.1.4.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script>
$('.prod_ids').click(function(){
var pids="";
$('.prod_ids:checked').each(function(){
pids=pids+$(this).val()+",";
});
//ajax code starts here
if(pids!="")
{
	get_products(pids);
}
else{
get_all_products(pids);
}
//end ajax code
});
</script>
</html>
