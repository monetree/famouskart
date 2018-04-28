<?php
require_once "includes/dbconnect.php";
require_once "includes/functions.php";
require_once "includes/library.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>Order Details</title>
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
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

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
 <?php //include_once "header.php"?>
 <!-- //header-bot -->
 <!-- banner -->
 <?php include_once "menu.php";?>
 <!-- //banner-top -->
<?php
$user_id = $_SESSION['user_id'];
 $order_id = $_GET['uid'];
 $select = "select * from e_orders_tbl
 inner join e_user_tbl on e_orders_tbl.user_id = e_user_tbl.user_id
  inner join e_shipping_tbl on e_orders_tbl.user_id = e_shipping_tbl.user_id
  inner join e_products_tbl on e_orders_tbl.prod_id = e_products_tbl.prod_id
  inner join e_list_sub_category_tbl on e_products_tbl.list_sub_cat_id = e_list_sub_category_tbl.list_sub_cat_id
 where e_orders_tbl.id = $order_id and e_user_tbl.user_id = $user_id";
$rs = mysql_query($select);
$row = mysql_fetch_assoc($rs);
$order_placed_on = $row['order_placed_on'];
$order_delivery_date = $row['order_delivery_date'];
$str = explode(" ",$order_placed_on);
$str2 = explode(" ",$order_delivery_date);
$order_place_date = $str[0];
$order_expected_delivery = $str2[0];
$order_status = $row['order_status'];
 ?>
 <table id="customers">
  <tr>
    <td>
      <p>Order Placed On: <?php echo $order_place_date;?></p>
      <?php
      if($order_status == 4){
        ?>
      <p>Order Delivered On: <?php echo $order_expected_delivery;?></p>
      <?php
      }
       ?>
      <p>Order Id: <?php echo $row['order_id'];?></p>
      <p>Total Amount: Rs.<?php echo $row['order_total'];?></p>
    </td>
    <td>
      <p style="color:#0099ff;">Updates Sent On</p>
      <p><?php echo $row['email'];?></p>
      <p><?php echo $row['mobile'];?></p>
    </td>
    <td>
      <p style="color:#0099ff;">Order to be deliver</p>
      <p><?php echo $row['address'];?>,
    <?php echo $row['landmark'];?>,
    <?php echo $row['pincode'];?>,
    <?php echo $row['city'];?>
    </p></td>
    <td>
<p style="color:#0099ff;">Payment mode</p>
      <?php
    $ptype = $row['payment_type'];
    if($ptype == 2){
      ?>
      <p>Cash on delivery</p>
      <?php
    }else{
      ?>
      <p>Online</p>
      <?php
    }
    ?></td>
    <td>  <img src="admin/uploads/<?php echo $row['prod_image'];?>" alt="failed to load image" style="width:200px;"></img>
<p><?php echo strtoupper($row['list_sub_cat_name']);?></p>
<p><?php echo ucfirst($row['prod_name']);?></p>
<p><?php echo "Qty: ".$row['order_qty'];?></p>
<p><p><?php echo "Rs. ".$row['order_total'];?></p>
</td>
    <td>

<?php

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







    </td>
  </tr>
</table>






</html>
