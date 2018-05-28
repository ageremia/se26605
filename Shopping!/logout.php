<?php
	session_start();
	$_SESSION['admin_id'] = 0;
	$_SESSION['user_id'] = 0;
	$_SESSION['shopping_cart'] = array();
	header('Location: index.php');
	
?>