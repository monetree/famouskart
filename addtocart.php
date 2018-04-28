<?php
require_once "includes/dbconnect.php";
require_once "includes/functions.php";
require_once "includes/library.php";
 ?>
<?php
 $lid = $_GET['lid'];
 $prod = "select prod_sp from e_products_tbl where prod_id = $lid";
 $prod_query = mysql_query($prod) or die(mysql_error());;
 $prod_info = mysql_fetch_assoc($prod_query);
 $sp = $prod_info['prod_sp'];
 session_start();
 $sess_id = session_id();
 ?>
 <?php
$check = "select added_by,prod_id,prod_qty from e_cart_tbl where
added_by = '$sess_id' and prod_id = $lid and cart_status = 0";
$query = mysql_query($check) or die(mysql_error());
$cart_count = mysql_num_rows($query);
  $row = mysql_fetch_assoc($query);
  $quan = $row['prod_qty'];
  $upd_quantity = $quan+1;
  $total =  ($upd_quantity * $sp)+20;
  if($cart_count > 0){
  $update_cart = "update e_cart_tbl set prod_qty = $upd_quantity, prod_total = $total where prod_id = $lid and added_by = '$sess_id' and cart_status = 0";
  $tot_query = mysql_query($update_cart) or die(mysql_error());
}else{
$prod_total = $sp + 20;
$added_on = date('Y-m-d H:i:s');
$insert = "insert into e_cart_tbl(prod_id,prod_qty,prod_sp,prod_shipping_cost,prod_total,added_by,added_on)
values($lid,1,$sp,20,$prod_total,'$sess_id','$added_on')";
$result = mysql_query($insert) or die(mysql_error());
}
header('location:checkout.php');
?>
