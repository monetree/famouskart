 <?php
 $con=mysql_connect("localhost","root","");
 if($con)
 {
 $select=mysql_select_db("ecommerce");
	 if(!$select)
	 {
		 echo "DB not selected";exit;
	 }
 }
 else
{
 echo "DB Connection Error..!";
 exit;
}
 ?>
 <?php
date_default_timezone_set('asia/kolkata');
  ?>
