<?php

require_once("model_dbcon.php");
require_once("corps.php");
error_reporting(0);

$action = $_REQUEST['action'];
$id = $_GET['id'];
$corp = $_POST['corp'];
$incorp_dt = $_POST['incorp_dt'];
$email = $_POST['email'];
$zipcode = $_POST['zipcode'];
$owner = $_POST['owner'];
$phone = $_POST['phone'];  


switch($action) {
	
	case "create":
		include_once("views_create.php");
		break;
}
?>