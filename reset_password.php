<?php
require_once "includes/dbconnect.php";
session_start();
$otp = $_SESSION['otp'];
extract($_POST);
if(isset($reset)){
$update = "update e_user_tbl set password = $password where otp=$otp";
$query= mysql_query($update);
if($password == $confirm_password){
header('location:login.php');
}else{
  $match = "Both password shold match";
}
}

 ?>
 <body style="background:lightgrey;">
  <div style="width:300px;margin:auto;background:orange;box-shadow:5px 5px 20px silver;border-radius:10px;padding:70px;outline:none;">
<h1 style="color:white;">Reset Password</h1>
<form method="post" action="">
<input type="password" name="password" placeholder="enter mobile" style="padding:10px;border-radius:2px;box-shadow:inset 2px 2px 5px silver;"><br><br>
<input type="password" name="confirm_password" placeholder="enter mobile" style="padding:10px;border-radius:2px;box-shadow:inset 2px 2px 5px silver;">
<br><br>
<input type="submit" name="reset" value="reset" style="width:80px;border-radius:2px;height:30px;background:grey;color:white;box-shadow:2px 2px 10px silver;border:none;">
<h1 style="color:white;"><?php if(isset($match)) echo $match;?></h1>
</form>
