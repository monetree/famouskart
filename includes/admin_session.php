<?php
session_start();
if(empty($_SESSION['admin_email'])){
	header('location:index.php');
}
?>
