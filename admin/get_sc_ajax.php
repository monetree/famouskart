<?php
require_once "../includes/admin_session.php";
require_once "../includes/dbconnect.php";
?>
<?php
$cid = $_GET['cid'];
$select = "select * from e_sub_category_tbl where cat_id = $cid";
$rs = mysql_query($select) or die(mysql_error());
?>
 <select name="sub_category" id="sub_category">
        <option value="">--Sub category--</option>
<?php
while($row = mysql_fetch_assoc($rs)){
?>
<option value="<?php echo $row['sub_cat_id'];?>"><?php echo $row['sub_cat_name'];?></option>
<?php
}
?>
</select>
