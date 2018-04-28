<?php
require_once "includes/dbconnect.php";
require_once "includes/functions.php";
require_once "includes/library.php";
 ?>
 <?php
$remove_prod = $_GET['id'];
$delete="delete from e_cart_tbl where cart_id = $remove_prod";
$query = mysql_query($delete) or die(mysql_error());
if($query)
header('location:checkout.php');
else
echo "not deleted";
  ?>
