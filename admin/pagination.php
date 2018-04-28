<table>
    <tr><th>Category Name</th></tr>   
<?php
require_once "../includes/dbconnect.php";
$per_page = 2;
if(isset($_GET['pn']))
$pn = $_GET['pn'];
else
$pn=0;
if($pn==1 || empty($pn))
$si = 0;
else
$si = $per_page*($pn-1);
$sql_read = "select * from e_categories_tbl limit $si,$per_page";
$rs= mysql_query($sql_read);
while($row = mysql_fetch_assoc($rs)){
    ?>
<tr><td><?php echo $row['cat_name'];?></td></tr>
<?php
}
?>
</table>
<div>
<?php
$sql_total = "select cat_name from e_categories_tbl";
$res = mysql_query($sql_total);
$rows_count = mysql_num_rows($res);
$pages = $rows_count/$per_page;//3
for($i=1;$i<=$pages;$i++){
?>
<a href="pagination.php?pn=<?php echo $i;?>"><?php echo $i;?></a>
<?php
}
?>
</div>
