<?php
require_once "includes/dbconnect.php";
require_once "includes/functions.php";
require_once "includes/library.php";
session_start();
?>
<?php
$address_type = $_GET['addr_type'];
$uid=$_SESSION['user_id'];
$select = "select * from e_address_book_tbl where user_id=$uid and address_title = $address_type";
$rs = mysql_query($select) or die(mysql_error());
$row = mysql_fetch_assoc($rs);
?>

<form method="post" action="">
<input type="text" name="name" value="<?php echo $row['name'];?>" style="border:2px solid coral;padding:5px;border-radius:12px;"><br/><br/>
 <input type="text" name="email" value="<?php echo $row['email'];?>" style="border:2px solid coral;padding:5px;border-radius:12px;"><br/><br/>
 <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" style="border:2px solid coral;padding:5px;border-radius:12px;" ><br/><br/>
<input type="text" name="city" value="<?php echo $row['city'];?>" style="border:2px solid coral;padding:5px;border-radius:12px;" placeholder="city"><br/><br/>
 <input type="text" name="pincode" value="<?php echo $row['pincode'];?>" style="border:2px solid coral;padding:5px;border-radius:12px;" placeholder="pincode"><br/><br/>
<input type="text" name="landmark" value="<?php echo $row['landmark'];?>" style="border:2px solid coral;padding:5px;border-radius:12px;" placeholder="landmark"><br/><br/>
<textarea name="address" style="border:2px solid coral;padding:5px;border-radius:12px;" placeholder="address"><?php echo $row['address'];?></textarea><br/><br/>
					<input type="submit" name="submit" value="Proceed to pay"/>
				</form>
