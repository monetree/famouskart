<?php
require_once "includes/dbconnect.php";
require_once "includes/functions.php";
require_once "includes/library.php";
  ob_start();
  @session_start();
 ?>
 <!--Coupon algorithm-->
 <?php
 date_default_timezone_set('asia/kolkata');
 $today = date('Y-m-d');
 extract($_POST);
 if(isset($apply))
 {
   $cart_info = get_cart_total(session_id());
   $total_amount = $cart_info['ctotal'];
 $select_coupon = "select coupon_code,coupon_type,coupon_worth,coupon_minimum_worth from e_coupons_tbl where coupon_code = '$coupon'
 and coupon_minimum_worth <= $total_amount and from_date <= '$today' and to_date >= '$today'";
 $coupon_rs = mysql_query($select_coupon);
 $coupon_count = mysql_num_rows($coupon_rs);
 $fetch_coupon = mysql_fetch_assoc($coupon_rs);
 $coupon_worth = $fetch_coupon['coupon_worth'];
  if($coupon_count > 0)
    {
      $success = "coupon applied successfully";
      $coupon_type = $fetch_coupon['coupon_type'];
      if($coupon_type == 1){
        $total_discount = $total_amount*($fetch_coupon['coupon_worth']/100);
        $payble_amount = $total_amount-$total_discount;
        $_SESSION['discount'] = $total_discount;
      }else{
        $total_discount = $row['coupon_worth'];
        $_SESSION['discount'] = $total_dis;
      }
    }else{
      $invalid = "Invalid coupon";

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
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Check Out</h3>
	</div>
</div>
<!-- //banner -->
<!-- check out -->
<div class="checkout">
	<div class="container">
		<h3>My Shopping Bag</h3>
		<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>Remove</th>
						<th>Product</th>
						<th>Quantity</th>
						<th>Product Name</th>
						<th>Price</th>
					</tr>
				</thead>
        <?php
        $sess_id = session_id();
        $sub_total = 0;
        $cart_qty = 0;
        $total = 0;
        $select = "select p.prod_name,p.prod_id,p.prod_sp,p.prod_image,c.cart_id,c.prod_qty,
        c.prod_total from e_products_tbl p inner join e_cart_tbl c on p.prod_id = c.prod_id
        where c.cart_status = 0 and c.added_by = '$sess_id'";
        $rs = mysql_query($select) or die(mysql_error());
        $count = mysql_num_rows($rs);
        if($count==0)
        				{
        					header('location:index.php');
        				}
        if($count > 0){
          while($row = mysql_fetch_assoc($rs)){
            $sub_total = $sub_total+$row['prod_total'];
            $cart_qty = $cart_qty+$row['prod_qty'];
            $selling_price = $row['prod_sp'];
            $gst = (18/100)*500;
            $shipping_charge = 20;

         ?>

					<tr class="rem1">
						<td class="invert-closeb">
							<div class="rem">
        <a href="remove_cart.php?id=<?php echo $row['cart_id'];?>">
								<div class="close1">

                </div>
                        </a>
							</div>
							<script>$(document).ready(function(c) {
								$('.close1').on('click', function(c){
									$('.rem1').fadeOut('slow', function(c){
										$('.rem1').remove();
									});
									});
								});
						   </script>
						</td>

						<td class="invert-image"><a href="single.html"><img src="admin/uploads/<?php echo $row['prod_image']; ?>" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
              <div class="quantity">
               <div class="quantity-select">
                 <a href="decrease.php?cid=<?php echo $row['cart_id'];?>"><div class="entry value-minus">&nbsp;</div>
                 </a>
   <div class="entry value"><span><?php echo $row['prod_qty'];?></span></div>
                 <a href="increase.php?cid=<?php echo $row['cart_id'];?>"><div class="entry value-plus active">&nbsp;</div>
                 </a>
               </div>
             </div>
           </td>
           <td class="invert"><?php echo ucfirst(substr($row['prod_name'],0,20));?></td>
           <td class="invert">Rs. <?php echo $row['prod_total'];?></td>
         </tr>
         <?php
         }
       }
         ?>
								<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
			</table>
		</div>
		<div class="checkout-left">

				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="index.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
				</div>
        <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
          <form action="" method="post">
            &nbsp&nbsp<input type="text" name="coupon" id="coupon" value="<?php if(isset($coupon)){echo $coupon;};?>" placeholder="enter coupon">
            <input type="submit" name="apply" value="apply" style="border:none;background:#0099ff;border-radius:5px;color:white;padding:2px;"><br>
            &nbsp&nbsp<p style="color:red;"><?php if(isset($invalid)){echo $invalid;}?></p>
            <p style="color:#0099ff;">  <?php if(isset($success)){echo $success;}?></p>
          </form>
        </div>
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4>Shopping basket</h4>
<?php
if(empty($_SESSION['discount']))
$_SESSION['doscount'] = 0;
 ?>
 					<ul>
						<li>Total Item <i>-</i> <span><?php echo $cart_qty;?></span></li>
            <li><i>-</i> <span><?php echo "our price + GST + shipping_charge";?></span></li>
						<li>Sub total <i>-</i> <span><?php echo $selling_price." + ".$gst." + ".$shipping_charge;?></span></li>
            <li>Discount: <i>-</i> <span>
              <?php
               if(isset($_SESSION['discount'])){
                  echo $_SESSION['discount'];
                }else{
                  echo "0";
                }
               ?></span></li>
            <li>Total payble <i>-</i> <span>
              <?php
               if(isset($_SESSION['discount'])){
                  echo $sub_total-$_SESSION['discount'];
               }else{
                 echo $sub_total;
               }
               ?>

            </li>


          </ul>
        <div style="background:black;padding:5px;color:#fff;">




<?php
$select1 = "select p.prod_name,p.prod_id,p.prod_sp,p.prod_image,c.cart_id,c.prod_qty,
c.prod_total from e_products_tbl p inner join e_cart_tbl c on p.prod_id = c.prod_id
where c.cart_status = 0 and c.added_by = '$sess_id'";
$rs1 = mysql_query($select1) or die(mysql_error());
 ?>

<a href="shipping.php?prod_id=<?php while($row1 = mysql_fetch_assoc($rs1)){echo $row1['prod_id'];}?>" style="color:#fff;text-decoration:none;">Proceed to order<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></div>

        </div>

				<div class="clearfix"> </div>
			</div>
	</div>
</div>
<!-- //check out -->
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
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>

										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
</body>


</html>
