<?php
require_once "includes/dbconnect.php";
?>
<?php
 $pids = rtrim($_GET['pids'],",");
 $select = "select prod_id,prod_name,prod_sp,prod_mrp,prod_image,prod_available_quantity from e_products_tbl where cat_id in($pids)";
$rs=mysql_query($select);
$count = mysql_num_rows($rs);
if($count>0){
while($row=mysql_fetch_assoc($rs)){
  ?>
  <div>

    <div class="col-md-4 product-men">
      <div class="men-pro-item simpleCart_shelfItem">
        <div class="men-thumb-item">

  <img src="admin/uploads/<?php echo $row['prod_image']; ?>" alt="img here" class="pro-image-front">
  <img src="admin/uploads/<?php echo $row['prod_image']; ?>" alt="img here" class="pro-image-back">
            <div class="men-cart-pro">
              <div class="inner-men-cart-pro">
                <a href="single.html" class="link-product-add-cart">Quick View</a>
              </div>
            </div>
            <span class="product-new-top">New</span>

        </div>
        <div class="item-info-product ">
  <h4>
  <a href="single.html">
  <?php
  $prod_name = ucfirst(substr($row['prod_name'],0,20));
  $len = strlen($row['prod_name']);

  ?>
  <?php echo $prod_name; if($len > 20) {echo '..';}?>
  </a></h4>
  <div class="info-product-price">
  <span class="item_price">Rs. <?php echo $row['prod_sp'];?></span>
  <del>Rs. <?php echo $row['prod_mrp'];?></del>
  </div>
  <div class="info-product-price">
  <?php
  $qty = $row['prod_available_quantity'];
  if($qty == 1){
  ?>
  <span class="item_price" style="font-size:16px;color:red;margin-left:4cm;">Available : <?php echo $qty;?></span>
  <?php
  }else if($qty > 1 && $qty < 4){
  ?>
  <span class="item_price" style="font-size:16px;color:orange;margin-left:4cm;">Available : <?php echo $qty;?></span>
  <?php
  }else{
  ?>
  <span class="item_price" style="font-size:16px;color:green;margin-left:4cm;">Available : <?php echo $qty;?></span>
  <?php
  }
  ?>

  </div>
  <a href="addtocart.php?lid=<?php echo $row['prod_id'];?>" class="item_add single-item hvr-outline-out button2">Add to cart</a>


        </div>
      </div>
    </div>

  </div>
  <?php
}
}else{
  ?>
	<p>No products found..!</p>
	<?php
}
?>
