<?php
	session_start();
	require_once("dbcon.php");
	require_once("functions.php");
	if($_POST != null)
	{
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$admin = get_Admin($db, $name, $pass);
		if($admin > 0)
		{
			$_SESSION['admin_id'] = $admin;
			header('Location: index.php');
		}
	}
?>


<?php require("header.php"); ?>
<div class="input_box">
	<form method="POST">
		Name: <input type="text" name="name"> <br>
		Pass: <input type="password" name="pass"> <br>
		<input type="submit">
	</form>
</div>
<?php require("footer.php"); ?>


