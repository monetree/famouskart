<?php
function get_categories()
{
	$sql_qry="select * from e_categories_tbl order by cat_name asc";
	$result_set=mysql_query($sql_qry) or die(mysql_error());
	return $result_set;
}
function get_sub_categories()
{
	$sql_qry="select * from e_sub_category_tbl order by sub_cat_name asc";
	$result_set=mysql_query($sql_qry) or die(mysql_error());
	return $result_set;
}
function get_list_sub_categories()
{
	$sql_qry="select * from e_list_sub_category_tbl order by list_sub_cat_name asc";
	$result_set=mysql_query($sql_qry) or die(mysql_error());
	return $result_set;
}
function products()
{
	$sql_qry="select * from e_list_sub_category_tbl order by list_sub_cat_name asc";
	$result_set=mysql_query($sql_qry) or die(mysql_error());
	return $result_set;
}
function user_menu()
{
	$select = "select cat_name from e_categories_tbl order by cat_priority";
	$rs = mysql_query($select);
	return $rs;
}
function get_cart_total($sess_id)
{
	$sql_fetch="select sum(prod_qty) as cqty,sum(prod_total) as ctotal from e_cart_tbl where added_by='$sess_id'";
	$rescart=mysql_query($sql_fetch);
	$cart_info=mysql_fetch_assoc($rescart);
	return $cart_info;
}

?>
