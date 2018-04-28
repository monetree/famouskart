<?php
require_once "../includes/admin_session.php";
require_once "../includes/dbconnect.php";
?>
<?php
$scat = $_GET['scat'];
$select = "select * from e_list_sub_category_tbl where sub_cat_id = $scat";
$rs = mysql_query($select);
?>
<select name="list_sub_cat_name" id="list_sub_cat_name">
        <option>--List Sub category--</option>
<?php
while($row = mysql_fetch_assoc($rs)){
?>
<option value="<?php echo $row['list_sub_cat_id'];?>"><?php echo $row['list_sub_cat_name'];?></option>
<?php
}
?>
</select>
