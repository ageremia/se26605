<?php

require_once("model_dbcon.php");
require_once("corps.php");


$action = $_REQUEST['action'];
//$corpId = $_GET['id'];
$corp = $_POST['corp'];
$incorp_dt = $_POST['incorp_dt'];
$email = $_POST['email'];
$zipcode = $_POST['zipcode'];
$owner = $_POST['owner'];
$phone = $_POST['phone'];  


/* if ($action == NULL || empty($action)):
	echo "Null or empty";
endif; */

switch($action) {
	
	case "save":
		$result = new_Corp($db, $corp, $incorp_dt, $email, $zipcode, $owner, $phone);
		break;
	
}
$companies = get_Corp($db);
include_once("views_form2.php");
include_once("corp_list.php");

?>