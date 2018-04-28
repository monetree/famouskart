<?php
require_once "../includes/admin_session.php";
require_once "../includes/dbconnect.php";
require_once "../includes/library.php";
require_once "../includes/functions.php";
?>
<select name="sub_cat_name" id="sub_cat_name">
<option value="">--Sub category--</option>
<?php
  $cid = GET['cid'];
  $sql_qry="select * from e_sub_category_tbl where sub_cat_id = $cid";
	$result_set=mysql_query($sql_qry) or die(mysql_error());

  while($subcat_row = mysql_fetch_assoc($result_set)){
   ?>
   <option value="<?php echo $subcat_row['sub_cat_id'];?>"><?php echo $subcat_row['sub_cat_name'];?></option>
<?php
}
?>
</select>
