<?php
require_once "includes/dbconnect.php";
extract($_POST);
if(isset($verify)){
$select = "select otp from e_user_tbl where otp = $otp";
$rs = mysql_query($select);
$count = mysql_num_rows($rs);
if($count>0){
header('location:reset_password.php');
}
}
 ?>
<body style="background:lightgrey;">
 <div style="width:300px;margin:auto;background:orange;box-shadow:5px 5px 20px silver;border-radius:10px;padding:70px;outline:none;">
<h1 style="color:white;">Enter Otp</h1>
<form method="post" action="">
<input type="text" name="otp" placeholder="enter otp" style="padding:10px;border-radius:2px;box-shadow:inset 2px 2px 5px silver;">
<input type="submit" name="verify" value="verify" style="width:80px;border-radius:2px;height:30px;background:grey;color:white;box-shadow:2px 2px 10px silver;border:none;">
</form>
</div>
