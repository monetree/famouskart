<head>

</head>
<?php
require_once "includes/dbconnect.php";
?>
<?php
if(!empty($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];

$select_wishlist = "select prod_id from e_wishlist_tbl where user_id = $user_id";
$exe_wishlist = mysql_query($select_wishlist);
$count_wishlist = mysql_num_rows($exe_wishlist);
}
 ?>

<div class="header-bot">
  <?php
  if(!empty($_SESSION['user_id'])){
    ?>
  <div>
	<a href="wishlist_products.php" title="goto wishlist" id="wishlist" style="float:right;right:0.1cm;position:absolute;">
		<button class="btn btn--info" id="wishlist_btn">
<span class="glyphicon glyphicon-heart" id="heart" style="color:orange;font-size:30px;text-shadow:3px 3px 10px silver;"><?php if(isset($count_wishlist)){echo $count_wishlist;}?></span>
</button>
</a>
</div>
<?php
}else{
  ?>
  <div style="display:none;">
  <a href="wishlist_products.php" title="goto wishlist" id="wishlist" style="float:right;right:0.1cm;position:absolute;">
    <button class="btn btn--info">
<span class="glyphicon glyphicon-heart" style="color:orange;font-size:30px;text-shadow:3px 3px 10px silver;"><?php if(isset($count_wishlist)){echo $count_wishlist;}?></span>
</button>
</a>
</div>
<?php
}
?>
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.php"><img src="images/logo3.jpg"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
			<form>
				<div class="search">
					<input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
				</div>
				<div class="section_room">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="">Categories</option>
						<?php
							$menu = user_menu();
							while($row = mysql_fetch_assoc($menu)){
						 ?>
						<option value="<?php echo $row['cat_id'];?>"><?php echo $row['cat_name'];?></option>
						<?php
						}
						?>

					</select>
				</div>
				<div class="sear-sub">
					<input type="submit" value=" ">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>

				<li><a class="fb" href="#"></a></li>
				<li><a class="twi" href="#"></a></li>
				<li><a class="insta" href="#"></a></li>
				<li><a class="you" href="#"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<script>
var wishlist = document.getElementById('wishlist');
var heart = document.getElementById('heart');
var wishlist_btn = document.getElementById('wishlist_btn');
wishlist.onmouseover = function() {mouserovera()};
wishlist.onmouseout = function() {mouseroveraa()};
function mouserovera(){
  wishlist_btn.style.background = "orange";
  heart.style.color = "white";
  heart.style.textShadow ="none";
  heart.style.transition = "0.5s";
}
function mouseroveraa(){
  wishlist_btn.style.background = "lightgrey";
  heart.style.color = "orange";
}

</script>
