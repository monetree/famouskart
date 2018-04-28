<<html>
<head>
  <style>
*{
  color:white;
  font-size:17px;
}
  </style>
</head>
  <body onload="submitPayuForm()" style="background:lightgrey;" id="move">

<?php
require_once "includes/dbconnect.php";
session_start();
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"]; //Please use the amount value from database
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="eCwWELxi"; //Please change the value with the live salt for production environment

//Validating the reverse hash
If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

                  }
	else {

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
		 $hash = hash("sha512", $retHashSeq);

       if ($hash != $posted_hash) {
	       echo "Transaction has been tampered. Please try again";
		   }
	   else {
?>
<div style="width:600px;margin:auto;background:orange;box-shadow:5px 5px 20px silver;border-radius:10px;padding:70px;outline:none;">

<?php
          echo "<h2 style='color:white;font-size:25px;text-align:center;'>Thank You, " . $firstname .".Your order status is ". $status .".</h2>";
          echo "<h3 style='color:white;font-size:25px;text-align:center;'>Your Transaction ID for this transaction is <span style='color:lightgrey;font-size:30px;'>".$txnid."</span></h3>";
$total_amt = $_SESSION['total_amt'];
$sess_id = session_id();
$select = "select * from e_orders_tbl where sess_id = '$sess_id' and order_total = $total_amt";
$rs = mysql_query($select) or die(mysql_error());
$row=mysql_fetch_assoc($rs);
$order_id = $row['order_id'];
$amount = $row['order_total'];
date_default_timezone_set('asia/kolkata');
$date_time = date('Y-m-d H:i:s');
$insert = "insert into e_payment_history_tbl(order_id,transaction_id,status,amount,date_time,mode) value('$order_id','$txnid','$status',$amount,'$date_time',1)";
$query = mysql_query($insert) or die(mysql_error());

		   }
?>
</div>
</body>
</html>
