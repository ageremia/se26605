<?php
	session_start();
	if( isset($_SESSION['user_id']) == false)
		$_SESSION['user_id'] = 0;
	if( isset($_SESSION['admin_id']) == false)
		$_SESSION['admin_id'] = 0;
	
	require_once("dbcon.php");

?>


<?php require("header.php"); ?>

<?php
if( $_SESSION['admin_id'] > 0 )
{
	require("admin_page.php");
}
else if( $_SESSION['user_id'] > 0 )
{
	require("user_page.php");
}
else
{
	echo "(please log in)";
}	
?>


<?php require("footer.php"); ?>


