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
	
	case "save":
		$results = new_Corp($db, $corp, $incorp_dt, $email, $zipcode, $owner, $phone);
		break;
	
	case "delete":
		delete_corp($db, $id);
		break;
	
	case "read":
		break;
	
	case "update":
		$comp = get_Corp($db, $id);
		include_once("views_form2.php");
		$comp = update_corp($db, $id, $corp, $incorp_dt, $email, $zipcode, $owner, $phone);
		
		break;
}

$companies = get_Corps($db);
include_once("corp_list.php");

?>