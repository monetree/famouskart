<?php
require_once "includes/dbconnect.php";
require_once "includes/functions.php";
require_once "includes/library.php";
  session_start();
 ?>
 <?php
 if(isset($_SESSION['email'])){
 	header('location:index.php');
 }
 ?>
<?php
extract($_POST);
if(isset($login))
{
$select_user = "select email,password,user_id,name from e_user_tbl where
 email = '".format_str($email)."' and password = '".format_str($password)."'";
$check_usr = mysql_query($select_user);
$count = mysql_num_rows($check_usr);
if($count > 0)
{
  $row = mysql_fetch_assoc($check_usr);
	$_SESSION['user_id']= $row['user_id'];
   $_SESSION['name'] = $row['name'];
  $_SESSION['email'] = $row['email'];
		$cart_info=get_cart_total(session_id());
    if(empty($cart_info['cqty']))
      header('location:index.php');
    else
      header('location:checkout.php');
}
else
    $failed = "Invalid username or password";
}
 ?>

   <body style="background:lightgrey;">
    <div style="width:300px;margin:auto;background:orange;box-shadow:5px 5px 20px silver;border-radius:10px;padding:70px;outline:none;">
   <h1 style="color:white;">Login Here</h1>
<form action="" method="post">
		<input type="text" name="email" placeholder="Email" style="padding:10px;border-radius:2px;box-shadow:inset 2px 2px 5px silver;"><br><br>
		<input type="password" name="password" placeholder="Password" style="padding:10px;border-radius:2px;box-shadow:inset 2px 2px 5px silver;"><br><br>
		<input type="checkbox"  id="brand" value="">
		<label for="brand"><span></span>Remember Me.</label>
    <br><br>
		<input type="submit" value="SIGNIN" name="login" style="width:80px;border-radius:2px;height:30px;background:grey;color:white;box-shadow:2px 2px 10px silver;border:none;">
  <br><br>  	<a href="forgot_password.php">Forgot password?</a>
</form>

<?php
if(isset($failed)){echo $failed;};
 ?>
