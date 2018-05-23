<?php
//requiring db, corps, header, and search options at top of page
require_once("models/dbcon.php");
require_once("models/corps.php");
include_once("views/header.php");
include("views/search_options.html");
error_reporting(0);

$action = $_REQUEST['action'];
$term = $_POST['term'];
$col = $_POST['col'];
$id = $_GET['id'];
$corp = $_POST['corp'];
$incorp_dt = $_POST['incorp_dt'];
$email = $_POST['email'];
$zipcode = $_POST['zipcode'];
$owner = $_POST['owner'];
$phone = $_POST['phone'];  

//switches for create, save, delete, update, list, search, sort and reset functions
//search for the term is stating string(number of letters) "" bool(true), yet not executed properly
switch($action) {
	
	case "create":
		include_once("views/form1.php");
		break;
		
	case "save":
		$results = new_Corp($db, $corp, $incorp_dt, $email, $zipcode, $owner, $phone);
		break;
	
	case "delete":
		delete_corp($db, $id);
		break;
	
	case "update":
		$comp = get_Corp($db, $id);
		include_once("views/form2.php");
		$comp = update_corp($db, $id, $corp, $incorp_dt, $email, $zipcode, $owner, $phone);
		break;
	
	case "list":
		$companies = get_Corps($db);
		include_once("views/corp_list.php");
		break;
	
	case "Search":
		$comp = search($db, $col, $term);
		include_once("views/show_corp.php");
		break;
		
	case "Sort":	
		$companies = ASC_List($db, $direction, $col);
		include_once("views/corp_list.php");
		break;
		
	case "Reset":
		$companies = get_Corps($db);
		include_once("views/corp_list.php");
		break;
}
//including views at bottom of page
$companies = get_Corps($db);
include_once("views/corp_list.php");
include_once("views/footer.php");

?>