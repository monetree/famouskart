<?php
require_once "../includes/admin_session.php";
require_once "../includes/dbconnect.php";

$select = "select slider_url from e_slider_tbl";
$rs = mysql_query($select);
$row = mysql_fetch_assoc($rs);
?>
<img src="<?php echo $row['slider_url'];?>" style="width:200px;height:100px;"></img>