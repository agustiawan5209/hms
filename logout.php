<?php 
session_start();
if(!empty($_SESSION['name']))
{
	unset($_SESSION['name']);
	session_destroy();
	header('location:index.php');
}
?>