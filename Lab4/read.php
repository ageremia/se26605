<?php
require_once("models/dbcon.php");
require_once("models/corps.php");
include_once("views/header.php");
error_reporting(0);

$action = $_REQUEST['action'];
$id = $_GET['id'];
$corp = $_POST['corp'];
$incorp_dt = $_POST['incorp_dt'];
$email = $_POST['email'];
$zipcode = $_POST['zipcode'];
$owner = $_POST['owner'];
$phone = $_POST['phone'];   


//read page with separate read switch
switch($action) {
	
	case "read":
		$comp = get_Corp($db, $id);
		include_once("views/show_corp.php");
		break;
	
}


		
include_once("views/footer.php");
?>