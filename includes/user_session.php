<?php
session_start();
if(empty($_SESSION['user_email'])){
	header('location:index.php');
}
?>
