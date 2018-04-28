<?php
require_once "includes/dbconnect.php";

 ?>
<?php
$id = $_GET['cid'];
$select = "select prod_qty,prod_sp from e_cart_tbl where cart_id = $id";
$rs = mysql_query($select);
$row = mysql_fetch_assoc($rs);
$prev = $row['prod_qty'];
if($prev > 1)
{
$plus = $prev-1;
$total_price = ($plus*$row['prod_sp'])+20;
$update = "update e_cart_tbl set prod_qty = $plus, prod_total = $total_price
where cart_id = $id";
$rs = mysql_query($update) or die(mysql_error());
if($rs)
header('location:checkout.php');
}
 ?>
