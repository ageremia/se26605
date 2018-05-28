<?php
	session_start();
	require_once("dbcon.php");
	require_once("functions.php");
	if($_POST != null)
	{
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$user = get_User($db, $name, $pass);
		if($user > 0)
		{
			$_SESSION['user_id'] = $user;
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


