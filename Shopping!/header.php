<!DOCTYPE html>
<html lang="en">
    <head>
     <meta charset="utf-8">	 
	 <link rel="stylesheet" type="text/css" href="style.css">
    </head>
	<body>
		<div id="loginbox">
			<?php
				if(isset($_SESSION['admin_id']) && $_SESSION['admin_id']>0)
				{
					echo '<a href="logout.php">Logout</a> / ';
				}
				else if(isset($_SESSION['user_id']) && $_SESSION['user_id']>0)
				{
					echo '<a href="logout.php">Logout</a> / ';
					echo '<a href="./">Shop</a> / ';
					echo '<a href="checkout.php">CheckOut</a>';
				}
				else
				{
					echo '<a href="login.php">Login</a> / ';
					echo '<a href="admin_login.php">Admins</a> / ';
					echo '<a href="register.php">Register</a>';
				}
			?>
		</div>
		<h1>Shopping Cart Website</h1>
