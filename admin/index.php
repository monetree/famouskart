<!--
created by : soubhagya
created on : 31:1:2018
purpose : Admin login
-->
<?php
session_start();
if(isset($_SESSION['admin_email'])){
	header('location:dashboard.php');
}
?>

<?php
extract($_POST);
if(isset($submit)){
require_once "../includes/dbconnect.php";
require_once "../includes/functions.php";
$select = "select admin_id,admin_email from e_admin_tbl where admin_email='".format_str($email)."' and 	admin_password='".format_str($password)."'";
$rs = mysql_query($select) or die(mysql_error());
$count = mysql_num_rows($rs);
if($count == 1){
		session_start();
		$row = mysql_fetch_assoc($rs);
		$_SESSION['admin_id'] = $row['admin_id'];
		$_SESSION['admin_email'] = $row['admin_email'];
$ip_addr = $_SERVER['REMOTE_ADDR'];
$login_date = date('Y-m-d H:i:s');
//updating last login ip and last login time in each time admin login
$update = "update e_admin_tbl set admin_last_login_date = '$login_date',admin_last_login_ip='$ip_addr' where admin_email='$email'";
$query = mysql_query($update);
header('location:dashboard.php');
}else{
$login_err = "Invalid Email And Password";
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Admin</title>
		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="font-awesome/4.5.0/css/font-awesome.min.css" />
		<!-- text fonts -->
		<link rel="stylesheet" href="css/fonts.googleapis.com.css" />
		<!-- ace styles -->
		<link rel="stylesheet" href="css/ace.min.css" />
		<link rel="stylesheet" href="css/ace-rtl.min.css" />
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">login form</span>
									<span class="white" id="id-text2">Application</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Company Name</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>

											<form action="" method="post">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="email" id="email" class="form-control" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" id="password" class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

										<p style="color:red;"><?php if(isset($login_err)){ echo $login_err; } ?></p>

													<div class="clearfix">


														<button type="submit" name="submit" id="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>


											<div class="space-6"></div>
										</div><!-- /.widget-main -->


									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->


							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="./js/script.js"></script>
		<!-- <![endif]-->

		<!--[if IE]>
<script src="js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});



			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');

	        e.preventDefault();
			 });

			});
		</script>
	</body>
</html>
