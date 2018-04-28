<?php
require_once "includes/dbconnect.php";
require_once "includes/functions.php";
require_once "includes/library.php";
// ob_start();
session_start();
//late added
$prod_id = $_GET['prod_id'];
echo $prod_id;
// function count_digit($number){
// return strlen((string)$number);
// }
// $num = "$prod_id";
// $no = count_digit($num);
// echo $no;

// while($get_p){
//   echo $get_p;
// }
//late added
 ?>
 <?php
 if(!isset($_SESSION['email'])){
 	header('location:login.php');
 }
  ?>
  <?php
extract($_POST);
if(isset($submit)){
  $uid=$_SESSION['user_id'];
  $sess_id = session_id();
  $sql_check = "select name from e_shipping_tbl where sess_id = '$sess_id'";
  $res = mysql_query($sql_check);
  $count = mysql_num_rows($res);
  if($count > 0)
  {
    $update = "update e_shipping_tbl set name = name='$name',email='$email',mobile='$mobile',city='$city',pincode=$pincode,landmark='$landmark',address='$address' where sess_id='$sess_id'";
    mysql_query($update) or die(mysql_error());
  }else{
    $sql_insert = "insert into e_shipping_tbl(name,prod_id,email,mobile,city,pincode,landmark,address,sess_id,user_id)
    values('$name',$prod_id,'$email','$mobile','$city',$pincode,'$landmark','$address','$sess_id',$uid)";
    mysql_query($sql_insert) or die(mysql_error());
  }
  header('location:payment.php');

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

<?php
$uid=$_SESSION['user_id'];
$select = "select name,email,mobile from e_user_tbl where user_id=$uid";
$rs = mysql_query($select) or die(mysql_error());
$row = mysql_fetch_assoc($rs);
?>

<div class="row" style="padding:5px;mergin:left:50%;">
      <div class="col-sm-2"></div>
    <div class="col-sm-3">

<input type="radio" name="radio" value="1" onclick="choose_address(1)">Home
<input type="radio" name="radio" value="2" onclick="choose_address(2)">Office
<input type="radio" name="radio" value="3" onclick="choose_address(3)">Other</br></br>
<h1>Choose Your address type</h1>

    </div>
  <div class="col-sm-4" id="show">
<form method="post" action="">
<input type="text" name="name" value="<?php echo $row['name'];?>" style="border:2px solid coral;padding:5px;border-radius:12px;"><br/><br/>
 <input type="text" name="email" value="<?php echo $row['email'];?>" style="border:2px solid coral;padding:5px;border-radius:12px;"><br/><br/>
 <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" style="border:2px solid coral;padding:5px;border-radius:12px;" ><br/><br/>
<input type="text" name="city"style="border:2px solid coral;padding:5px;border-radius:12px;" placeholder="city"><br/><br/>
 <input type="text" name="pincode" style="border:2px solid coral;padding:5px;border-radius:12px;" placeholder="pincode"><br/><br/>
<input type="text" name="landmark" style="border:2px solid coral;padding:5px;border-radius:12px;" placeholder="landmark"><br/><br/>
<textarea name="address" style="border:2px solid coral;padding:5px;border-radius:12px;" placeholder="address"></textarea><br/><br/>
					<input type="submit" name="submit" value="Proceed to pay"/>

				</form>

</div>
  <div class="col-sm-3">
<a href="addnewaddress.php">Add New Address</a>
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
<script type="text/javascript">
function choose_address(val){
if(window.XMLHttpRequest)
var obj = new XMLHttpRequest;
else
var obj = new ActiveXObject("microsoft.XMLHTTP");
obj.open('GET','office_addr_ajax.php?addr_type='+val,true);
obj.send();
obj.onreadystatechange=function(){
  if(obj.readyState == 4)
  document.getElementById('show').innerHTML = obj.responseText;
}
}
</script>

</html>
