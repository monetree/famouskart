<?php
require_once "includes/dbconnect.php";
require_once "includes/library.php";
?>
<body>
<div style="width:200px;float:left;">
<?php
				   $menus=get_categories();
				   while($menu=mysql_fetch_assoc($menus))
				   {
				  ?>
	<input type="checkbox" name="cids[]" value="<?php echo $menu['cat_id'];?>" class="prod_ids"/><?php echo ucfirst($menu['cat_name']);?><br/>
				  <?php
				   }
				   ?>
</div>
<div style="width:800px;float:left;" id="products_result">
No products
</div>
</body>
<script>
function get_products(pids)
{
	var obj;
	if(window.XMLHttpRequest)
	obj=new XMLHttpRequest;
	else
	obj=new ActiveXObject('Microsoft.XMLHTTP');
	obj.onreadystatechange=function(){
			if(this.readyState==4)
	document.getElementById('products_result').innerHTML=
	this.responseText;
		};
	obj.open('GET','test_ajax.php?pids='+pids,true);
	obj.send();
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$('.prod_ids').click(function(){
var pids="";
$('.prod_ids:checked').each(function(){
pids=pids+$(this).val()+",";
});
//ajax code starts here
if(pids!="")
{
	get_products(pids);
}
else{
	document.getElementById('products_result').innerHTML="No products found..!";
}
//end ajax code
});
</script>
