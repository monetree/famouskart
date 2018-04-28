<?php
require_once "includes/dbconnect.php";
?>
<?php
$date =date('Y-m-d');
$userid = $_GET['userid'];
$prodid = $_GET['prodid'];
$select_wishlist = "select prod_id from e_wishlist_tbl where prod_id = $prodid";
$wishlist_query = mysql_query($select_wishlist) or die(mysql_query());
$count_wishlist = mysql_num_rows($wishlist_query);
if($count_wishlist == 0){

$insert = "insert into e_wishlist_tbl(user_id,prod_id,added_on) values($userid,$prodid,'$date')";
$query = mysql_query($insert) or die(mysql_error());
if($query)
echo "inserted";
else
echo "failed";
}

 ?>
