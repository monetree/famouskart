<style>
#nth:nth-child(odd){
	float:left;
	border-left:5px solid orange;
	background:lightgrey;
	width:60%;
	border-radius: 0px 10px 10px 0px;
	box-shadow:2px 5px 5px silver;
}
#nth:nth-child(even){
	float:right;
	border-right:5px solid orange;
	background:lightgrey;
		width:60%;
		border-radius: 10px 0px 0px 10px;
	box-shadow:2px 5px 5px silver;
}
.no_review{
border-radius: 15px 50px;
	background:lightgrey;
		width:100%;
		15px 50px;
		padding:30px;
		margin:20px;
}
#animation{
	opacity:0.1;
	transition:5s;
}
</style>
<?php
require_once "includes/dbconnect.php";
require_once "includes/library.php";
session_start();
$prod_id = $_GET['prod_id'];
if(!empty($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];
}else{
	$user_id = 0;
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- single -->
<script src="js/imagezoom.js"></script>
<script src="js/jquery.flexslider.js"></script>
<!-- single -->
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
<body id="scroll">
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
<?php include_once "header.php";?>
<!-- //header-bot -->
<!-- banner -->
<?php include_once "menu.php";?>
<!-- //banner-top -->
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Preview</h3>
	</div>
</div>
<!-- //banner -->
<!-- single -->
<?php
$select_to_preview = "select * from e_products_tbl where prod_id = $prod_id";
$exe_it = mysql_query($select_to_preview);
$preview = mysql_fetch_assoc($exe_it);
 ?>
<div class="single">
	<div class="container">
		<div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<!-- FlexSlider -->
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
					<ul class="slides">
						<li data-thumb="admin/uploads/<?php echo $preview['prod_image'];?>">
							<div class="thumb-image"> <img src="admin/uploads/<?php echo $preview['prod_image'];?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="admin/uploads/<?php echo $preview['prod_image'];?>">
							<div class="thumb-image"> <img src="admin/uploads/<?php echo $preview['prod_image'];?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="admin/uploads/<?php echo $preview['prod_image'];?>">
							<div class="thumb-image"> <img src="admin/uploads/<?php echo $preview['prod_image'];?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="admin/uploads/<?php echo $preview['prod_image'];?>">
							<div class="thumb-image"> <img src="admin/uploads/<?php echo $preview['prod_image'];?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
					<h3><?php echo $preview['prod_name'];?></h3>
					<p><span class="item_price"><?php echo $preview['prod_sp'];?></span> <del>- <?php echo $preview['prod_mrp'];?></del></p>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="description">
						<h5><?php echo $preview['prod_desc'];?></h5>
						<input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
						<input type="submit" value="Check">
					</div>
					<div class="color-quality">
						<div class="color-quality-right">
							<?php
								$prod_available = $preview['prod_available_quantity'];
								if($prod_available >= 5){
							 ?>
				<h5 style="color:green;">Available :<?php echo $prod_available;?></h5>
							<?php
}elseif($prod_available >=3 && $prod_available<5){
?>
	<h5 style="color:orange;">Available :<?php echo $prod_available;?></h5>
	<?php
}elseif($prod_available <=2){
?>
	<h5 style="color:red;">Available :<?php echo $prod_available;?> (Hurry up before someone else take it)</h5>
	<?php
}
?>
						</div>
					</div>
					<div class="occasional">
						<h5>Types :</h5>
						<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Shoes</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Sports Shoes</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Formal Shoes</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="occasion-cart">
						<a href="addtocart.php?lid=<?php echo $preview['prod_id'];?>" class="item_add single-item hvr-outline-out button2">Add to cart</a>
					</div>

		</div>
				<div class="clearfix"> </div>

				<div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">

							<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Rate This Product</a></li>

						</ul>
						<div id="myTabContent" class="tab-content">

							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="images/men3.jpg" alt=" " class="img-responsive">
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">Admin</a></li>
												<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a></li>
											</ul>
											<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
												suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
												vel eum iure reprehenderit.</p>
										</div>
										<div class="clearfix"> </div>
									</div>

									<div class="add-review">
										<h4>add a review</h4>
<?php
extract($_POST);
if(isset($submit)){
$date = date('Y-m-d');
	$insert_review = "insert into e_products_review_tbl
	(reviewer_name,message,review_date,review_status,prod_id,user_id,rating)
	values('$name','$message','$date',1,$prod_id,$user_id,$radio)";
	$review_qry = mysql_query($insert_review) or die(mysql_error());
}

 ?>
										<form action="" method="post">
											<input type="text" id="name" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required>

														<label class="radio"><input type="radio" name="radio" value="1"><i></i>1</label>
														<label class="radio"><input type="radio" name="radio" value="2"><i></i>2</label>
														<label class="radio"><input type="radio" name="radio" value="3"><i></i>3</label>
														<label class="radio"><input type="radio" name="radio" value="4"><i></i>4</label>
														<label class="radio"><input type="radio" name="radio" value="5"><i></i>5</label>

													<textarea type="text" name="message" id="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
												<input type="submit" name="submit" onclick="store()" value="SEND">
										</form>

									</div>
								</div>
							</div>
							</div>
<div>
	<h2 style="text-align:center;color:orange;">Ratings and Reviews</h2>
</div>
<div id="animation">

<?php
$select_review = "select reviewer_name,message from e_products_review_tbl where prod_id = $prod_id";
$review_qry = mysql_query($select_review) or die(mysql_query());
$count_review = mysql_num_rows($review_qry);
if($count_review > 0){
while($review_row= mysql_fetch_assoc($review_qry)){
?>
<div style="padding:10px;margin:10px;" id="nth">
<p><?php echo ucwords($review_row['message']);?></p>
<p style="color:grey">By: <?php echo ucwords($review_row['reviewer_name']);?></p>
</div>
<?php
}
}else{
	?>
	<div class="no_review">
	<h3 style="text-align:center;color:red;">********************** &nbsp&nbsp&nbspNo Reviews &nbsp&nbsp&nbsp     *******************</h3>
	</div>
	<?php
}
?>
</div>


							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown1" aria-labelledby="dropdown1-tab">
								<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown2" aria-labelledby="dropdown2-tab">
								<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
							</div>
						</div>
					</div>
				</div>
	</div>
</div>


<!-- //single -->
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

			</div>
<!-- //login -->
</body>
<script>
document.querySelector('#scroll').onscroll = function() {scroll()}
function scroll(){
	document.querySelector('#animation').style.opacity= "1";
	document.querySelector('#animation').style.transition= "5s";
}

</script>
</html>
