<?php
	session_start();
	require_once("dbcon.php");
	require_once("functions.php");
	if($_POST != null)
	{
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$pass2 = $_POST['pass2'];
		if($pass != $pass2)
		{
			echo "ERROR: Passwords did not match!";
		}
		else
		{
			$user = get_User_No_Auth($db, $name);
			if($user > 0)
			{
				echo "Username already taken!";
			}
			else
			{
				$sql = "INSERT INTO sh_user(name, pass, status) VALUES ('$name', '$pass', 1);";
				$db->query($sql);
				echo "Created!  Please log in.";
			}
		}
	}
?>


<?php require("header.php"); ?>
<div class="input_box">
	<form method="POST">
		Username: <input type="text" name="name"> <br>
		Password: <input type="password" name="pass"> <br>
		Password (Again): <input type="password" name="pass2"> <br>
		
		<input type="submit">
	</form>
</div>
<?php require("footer.php"); ?>


