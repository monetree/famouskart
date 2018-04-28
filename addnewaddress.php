<?php
require_once "includes/dbconnect.php";
require_once "includes/functions.php";
require_once "includes/library.php";
 ?>
 <?php

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
    </div>
</div>
<?php
$uid=$_SESSION['user_id'];
extract($_POST);
if(isset($submit)){
$check = "select address_title from e_address_book_tbl where user_id = $uid and address_title = $address_type";
$check_query = mysql_query($check);
$count_title= mysql_num_rows($check_query);
if($count_title > 0){
  $update_address_title = "update e_address_book_tbl set name='$name',email='$email',mobile='$mobile',city='$city',pincode=$pincode,landmark='$landmark',address='$address' where user_id = $uid and address_title = $address_type";
  $update_query = mysql_query($update_address_title);
  if($update_query){
    if($address_type == 1){
    $address_type = "home";
  }elseif($address_type == 2){
    $address_type = "office";
  }elseif($address_type == 3){
    $address_type = "other";
  }
  $updated = $address_type . "address is updated";
  }

}else{
$insert_address = "insert into e_address_book_tbl(user_id,address_title,name,email,mobile,city,pincode,landmark,address)
values($uid,$address_type,'$name','$email','$mobile','$city',$pincode,'$landmark','$address')";
$insert_query= mysql_query($insert_address);
if($insert_query){
  $inserted = "New address saved";
}
}
}
 ?>
<?php
$select = "select name,email,mobile from e_user_tbl where user_id=$uid";
$rs = mysql_query($select) or die(mysql_error());
$row = mysql_fetch_assoc($rs);
?>
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-4">

<form method="post" action="">
<select name="address_type" style="padding:20px 50px;font-size:22px;">
<option value="1">-Home-</option>
<option value="2">-Office-</option>
<option value="3">-Other-</option>
</select><br><br>
<h3>Choose address type before proceed</h3>

  </div>
  <div class="col-sm-4">

<input type="text" name="name" value="<?php echo $row['name'];?>" style="border:2px solid coral;padding:5px;border-radius:12px;"><br/><br/>
 <input type="text" name="email" value="<?php echo $row['email'];?>" style="border:2px solid coral;padding:5px;border-radius:12px;"><br/><br/>
 <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" style="border:2px solid coral;padding:5px;border-radius:12px;" ><br/><br/>
<input type="text" name="city"style="border:2px solid coral;padding:5px;border-radius:12px;" placeholder="city"><br/><br/>
 <input type="text" name="pincode" style="border:2px solid coral;padding:5px;border-radius:12px;" placeholder="pincode"><br/><br/>
<input type="text" name="landmark" style="border:2px solid coral;padding:5px;border-radius:12px;" placeholder="landmark"><br/><br/>
<textarea name="address" style="border:2px solid coral;padding:5px;border-radius:12px;" placeholder="address"></textarea><br/><br/>
<input type="submit" name="submit" value="Save"/>

				</form>

</div>
  <div class="col-sm-2">
<?php if(isset($inserted))
{
  ?>
<p style="color:green"><?php echo $inserted;?></p>
<?php
}
?>
<?php if(isset($updated)){
?>
<p style="color:green"><?php echo $updated;?></p><?php
}
  ?>
</div>
  <div class="col-sm-1"></div>
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
