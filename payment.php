
<?php
require_once "includes/dbconnect.php";
require_once "includes/functions.php";
require_once "includes/library.php";
ob_start();
session_start();
//late added
$uid=$_SESSION['user_id'];
$sess_id=session_id();
$select_pid = "select prod_id from e_shipping_tbl where sess_id = '$sess_id'";
$select_pid_res = mysql_query($select_pid) or die(mysql_error());
$get_pid = mysql_fetch_assoc($select_pid_res);
$prod_id = $get_pid['prod_id'];
echo $prod_id;
//late added
 ?>
 <?php
 if(!isset($_SESSION['email'])){
 	header('location:login.php');
 }
  ?>
  <?php
extract($_POST);
if(isset($paynow)){
$order_id="SRK".rand(1000,9999);
$cart_info=get_cart_total(session_id());
$order_qty=$cart_info['cqty'];
$order_total=$cart_info['ctotal'];
date_default_timezone_set('asia/kolkata');
$ordered_date=date('Y-m-d H:i:s');
$deliver_date=date('Y-m-d',strtotime("+5 day"));
if(!empty($_SESSION['discount'])){
$discount = $_SESSION['discount'];
}
if(empty($discount))
$discount = 0;
$payble_amount = $order_total - $discount;
if($payment_type==2)
{
  $sql_order="insert into e_orders_tbl(order_id,order_discount,order_sub_total,prod_id,order_total,order_qty,user_id,order_placed_on,order_delivery_date,order_status,payment_type,sess_id)
   values('$order_id',$discount,$order_total,$prod_id,$payble_amount,$order_qty,$uid,'$ordered_date','$deliver_date',1,$payment_type,'$sess_id')";
		$res=mysql_query($sql_order);
		if($res){
      $sql_shipping_update="update e_shipping_tbl set order_id='$order_id',user_id=$uid where sess_id='$sess_id'";
  	mysql_query($sql_shipping_update);
    $sql_cart_update = "update e_cart_tbl ser order_id = '$order_id',user_id=$uid,prod_payment_status=1,cart_status=1 where added_by = '$sess_id'";
    mysql_query($sql_cart_update);
}
header('location:ordersuccess.php');
}else {
  $sql_order="insert into e_orders_tbl(order_id,order_discount,order_sub_total,prod_id,order_total,order_qty,user_id,order_placed_on,order_delivery_date,order_status,payment_type,sess_id)
   values('$order_id',$discount,$order_total,$prod_id,$payble_amount,$order_qty,$uid,'$ordered_date','$deliver_date',1,1,'$sess_id')";
    $res=mysql_query($sql_order);
    if($res){
      $sql_shipping_update="update e_shipping_tbl set order_id='$order_id',user_id=$uid where sess_id='$sess_id'";
    mysql_query($sql_shipping_update);
    $sql_cart_update = "update e_cart_tbl ser order_id = '$order_id',user_id=$uid,prod_payment_status=1,cart_status=1 where added_by = '$sess_id'";
    mysql_query($sql_cart_update);
    $_SESSION['total_amt'] = $payble_amount;
  header('location:online_payment.php');
}
}
}

  ?>
<!DOCTYPE html>
<html>
<head>
<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Check Out :: w3layouts</title>
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

<div class="page-head">
	<div class="container">
		<h3>Payment Details</h3>
	</div>
</div>
<!-- //banner -->
<!-- check out -->
<div class="checkout">
	<div class="container">
		<h3>Payment Details</h3>
		<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
	</div>
			<form method="post" action="">
			<input type="radio" name="payment_type" value="1"/>Online
			<input type="radio" name="payment_type" value="2"/>COD<br/><br/>
	<input type="submit" name="paynow" value="Confirm order"/>

<!--late added-->

<!--late added-->


		</form>
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

</body>

</html>
