<?php

function get_Corps($db) {
	
	$sql = "Select * From corps";
	$results = $db->query($sql);
	return $results;
	
}

function get_Corp($db, $id) {
	
	try{
		$sql = "SELECT * FROM corps WHERE id=$id";
		$results = $db->query($sql);
		$comp = $results->fetch();
		return $comp;
		
	}
	
	catch(PDOException $e) {
		die('There was a problem with your comp');
	}
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
		die('There was a problem with your create');
	}
}

function delete_corp($db, $id)
{
	$sql = "DELETE FROM corps WHERE id = :id";
	$ps = $db->prepare($sql);
	$ps->bindValue(':id', $id);
	$ps->execute();
}

function update_corp($db, $id, $corp, $incorp_dt, $email, $zipcode, $owner, $phone) {
	
	try{
		$sql = "UPDATE corps SET id = :id, corp = :corp, incorp_dt = :incorp_dt, email = :email, zipcode = :zipcode, owner = :owner, phone = :phone WHERE id=:id";
		$ps = $db->prepare($sql);
		$ps->bindValue(':id', $id);
		$ps->bindValue(':corp', $corp);
		$ps->bindValue(':incorp_dt', $incorp_dt);
		$ps->bindValue(':email', $email);
		$ps->bindValue(':zipcode', $zipcode);
		$ps->bindValue(':owner', $owner);
		$ps->bindValue(':phone', $phone);
		return $ps->execute();
		
	}
	
	catch(PDOException $e) {
		die('There was a problem with your update');
	}
}

?>