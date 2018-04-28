<?php
require_once "includes/dbconnect.php";
require_once "includes/library.php";
@session_start();
$sess_id = session_id();
 ?>
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
						<?php
						$menu = user_menu();
						while($row = mysql_fetch_assoc($menu)){
						?>
					<li class=" menu__item"><a class="menu__link" href="books.html"><?php echo $row['cat_name'];?></a></li>
						<?php
						}
						?>
				  </ul>
				</div>
			  </div>

			</nav>

		</div>
		<div class="top_nav_right">

			<div class="cart box_1">
<?php

$sql_fetch="select sum(prod_qty) as cqty,sum(prod_total)
 as ctotal from e_cart_tbl where added_by='$sess_id'";
 $rs = mysql_query($sql_fetch);
 $row = mysql_fetch_assoc($rs);
if(!empty($row['cqty'])){
?>
				<a href="checkout.php">
				<h3> <div class="total">
				<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
				Rs. <?php echo $row['cqty'];?> (<?php echo $row['ctotal'];?> items)</div>

				</h3>
				</a>
				<?php
				}
				else
				{
					echo "Cart is empty";
				}
				?>


				</div>













		</div>
		<div class="clearfix"></div>
	</div>
</div>
