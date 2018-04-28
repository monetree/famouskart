<?php
require_once "includes/dbconnect.php";
session_start();
extract($_POST);
if(isset($send)){
$select = "select mobile from e_user_tbl where mobile=$mobile";
$rs=mysql_query($select) or die(mysql_error());
$count=mysql_num_rows($rs);
if($count>0){
  $otp = rand(1000,9000);
  $_SESSION['otp'] = $otp;
  $update = "update e_user_tbl set otp=$otp where mobile=$mobile";
  $query=mysql_query($update);

header('location:verify_otp.php');
}else{
  echo "Number not Exist";
}
}

 ?>
 <body style="background:lightgrey;">
  <div style="width:300px;margin:auto;background:orange;box-shadow:5px 5px 20px silver;border-radius:10px;padding:70px;outline:none;">
<h1 style="color:white;">Enter Mobile</h1>
<form method="post" action="">
<input type="text" name="mobile" placeholder="enter mobile" style="padding:10px;border-radius:2px;box-shadow:inset 2px 2px 5px silver;">
<input type="submit" name="send" value="send" style="width:80px;border-radius:2px;height:30px;background:grey;color:white;box-shadow:2px 2px 10px silver;border:none;">
</form>
