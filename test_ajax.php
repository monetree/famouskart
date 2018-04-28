<?php
require_once "includes/dbconnect.php";
require_once "includes/library.php";
?>
<?php
$pids=rtrim($_GET['pids'],",");
$sql_get="select * from e_products_tbl where cat_id in($pids) ";
$res=mysql_query($sql_get) or die(mysql_error());
$count=mysql_num_rows($res);
if($count>0)
{
while($row=mysql_fetch_assoc($res))
{
	?>
	<p><?php echo $row['prod_name'];?></p>
	<?php
}
}
else
{
	?>
	<p>No products found..!</p>
	<?php
}
?>
