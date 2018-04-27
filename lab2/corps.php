<?php

function get_Corp($db) {
	
	$sql = "Select * From corps";
	$results = $db->query($sql);
	return $results;
	
}

function new_Corp($db, $corp, $incorp_dt, $email, $zipcode, $owner, $phone) {
	
	try{
		$sql = "INSERT INTO corps SET corp = :corp, incorp_dt = :incorp_dt, email = :email, zipcode = :zipcode, owner = :owner, phone = :phone";
		$ps = $db->prepare($sql);
		$ps->bindValue(':corp', $corp);
		$ps->bindValue(':incorp_dt', $incorp_dt);
		$ps->bindValue(':email', $email);
		$ps->bindValue(':zipcode', $zipcode);
		$ps->bindValue(':owner', $owner);
		$ps->bindValue(':phone', $phone);
		return $ps->execute();
		
	}
	
	catch(PDOException $e) {
		die('There was a problem with your add');
	}
}

?>