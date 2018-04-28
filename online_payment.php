<?php
require_once "includes/dbconnect.php";
session_start();
$sess_id=session_id();
$sess_id;
$total_amt = $_SESSION['total_amt'];
$total_amt;
$select_data = "select * from e_orders_tbl inner join e_user_tbl
on e_orders_tbl.user_id = e_user_tbl.user_id where e_orders_tbl.sess_id = '$sess_id' and e_orders_tbl.order_total = $total_amt";
$rs = mysql_query($select_data);
$row = mysql_fetch_assoc($rs);
$payble_amount = $row['order_total'];
$user_name = $row['name'];
$user_email = $row['email'];
$phone_no = $row['mobile'];
$prod_des = "product";
 ?>
<?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "gtKFFx"; //Please change this value with live key for production
   $hash_string = '';
// Merchant Salt as provided by Payu
$SALT = "eCwWELxi"; //Please change this value with live salt for production

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://test.payu.in";

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {
    $posted[$key] = $value;

  }
}

$formError = 0;

if(empty($posted['txnid'])) {
   // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])

  ) {
    $formError = 1;
  } else {

	$hashVarsSeq = explode('|', $hashSequence);

	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }
    $hash_string .= $SALT;
    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  <style>
*{
  color:white;
  font-size:17px;
}
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid orange;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;

}
/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
  </style>
  </head>
  <body onload="submitPayuForm()" style="background:lightgrey;" id="move">

    <center>
      <h1 style="color:orange;margin-top:6cm;">Please wait for sometime..</h1>
    <div class="loader"></div>
  </center>
    <div style="width:600px;display:none;margin:auto;background:orange;box-shadow:5px 5px 20px silver;border-radius:10px;padding:70px;outline:none;">
<h1 style="color:white;font-size:25px;text-align:center;">PayU Form</h1>
    <br/>
    <?php if($formError) { ?>
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm" id="payuForm" return="myFunction()">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />

	    <input type="hidden" name="surl" value="http://localhost/workspace/php/seshu_project/e-commerce/response.php" />   <!--Please change this parameter value with your success page absolute url like http://mywebsite.com/response.php. -->
		 <input type="hidden" name="furl" value="http://localhost/workspace/php/seshu_project/e-commerce/response.php" /><!--Please change this parameter value with your failure page absolute url like http://mywebsite.com/response.php. -->
      <table>

        <tr>
          <td>Amount: </td>
          <td><input name="amount" type="hidden" value="<?php echo $payble_amount;?>" style="padding:10px;border-radius:2px;box-shadow:inset 2px 2px 5px silver;"></td>
          <td>First Name: </td>
          <td><input name="firstname" type="hidden" id="firstname" value="<?php echo $user_name;?>" style="padding:10px;border-radius:2px;box-shadow:inset 2px 2px 5px silver;"></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input name="email" type="hidden" id="email" value="<?php echo $user_email;?>" style="padding:10px;border-radius:2px;box-shadow:inset 2px 2px 5px silver;"></td>
          <td>Phone: </td>
          <td><input name="phone" type="hidden" value="<?php echo $phone_no;?>" style="padding:10px;border-radius:2px;box-shadow:inset 2px 2px 5px silver;"></td>
        </tr>
        <tr>
          <td>Product Info: </td>
          <td colspan="3"><textarea name="productinfo" style="padding:10px;border-radius:2px;box-shadow:inset 2px 2px 5px silver;display:none;"><?php echo $prod_des; ?></textarea></td>
        </tr>

        <tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" id="btn" value="Submit" style="width:80px;border-radius:2px;height:30px;background:grey;color:white;box-shadow:2px 2px 10px silver;border:none;display:none;"></td>
          <?php } ?>
        </tr>
      </table>
    </form>
  </div>
  </body>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script>
        $(document).ready(function(){
          $('#btn').click();
        });
  </script>
</html>
