<?php
require_once "includes/dbconnect.php";
require_once "includes/functions.php";
require_once "includes/library.php";
ob_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Orders</title>
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
<?php include_once "header.php"?>
<!-- //header-bot -->
<!-- banner -->
<?php include_once "menu.php";?>
<!-- //banner-top -->
<?php
$user_id = $_SESSION['user_id'];
$select_prod = "select * from e_orders_tbl inner join
e_products_tbl on e_orders_tbl.prod_id = e_products_tbl.prod_id
inner join e_list_sub_category_tbl on e_products_tbl.list_sub_cat_id = e_list_sub_category_tbl.list_sub_cat_id
where e_orders_tbl.user_id = $user_id and e_products_tbl.list_sub_cat_id = e_list_sub_category_tbl.list_sub_cat_id";
$select_qry = mysql_query($select_prod);
while($show_time = mysql_fetch_assoc($select_qry)){
 ?>
<br>
<a href="order_details.php?uid=<?php echo $show_time['id'];?>">
<div class="row">
  <h3 style="margin-left:1cm;color:#0099ff;">Order no: <?php echo $show_time['order_id'];?></h3>
<div class="col-sm-2">
  <img src="admin/uploads/<?php echo $show_time['prod_image'];?>" alt="failed to load image" style="width:200px;"></img>
</div>
<div class="col-sm-2">
<ul style="list-style-type:none;">
<li><b><?php echo strtoupper($show_time['list_sub_cat_name']);?></b></li>
<li><?php echo ucfirst($show_time['prod_name']);?></li>
<li><?php echo "Qty: ".$show_time['order_qty'];?></li>
<li><b><?php echo "Rs. ".$show_time['order_total'];?></b></li>
<li>
  <?php
$order_status = $show_time['order_status'];
if($order_status == 1){
  ?>
  <p style="color:#0099ff;font-weight:bold;">Order Placed</p>
  <?php
}else if($order_status == 2){
  ?>
    <p style="color:#0099ff;font-weight:bold;">Order Confirmed</p>
  <?php
}else if($order_status == 3){
  ?>
  <p style="color:#0099ff;font-weight:bold;">Order Dispatched</p>
  <?php
}else if($order_status == 4){
  ?>
  <p style="color:#0099ff;font-weight:bold;">Order Delivered</p>
  <?php
}else if($order_status == 5){
  ?>
  <p style="color:#0099ff;font-weight:bold;">Order Cancelled</p>
  <?php
}
?>
</li>

</ul>
</div>
</div>
</a>
<?php
}
 ?>
<br>



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

</body>

</html>
