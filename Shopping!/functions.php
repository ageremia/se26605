<?php
	function get_Admin($db, $name, $pass) {
		$sql = "Select * From sh_admin WHERE name='$name' AND pass='$pass';";
		$results = $db->query($sql);
		if($results->rowCount() == 0) {
			return -1;
		}
		$row = $results->fetch();
		return $row['id'];
			
	}
	
	function get_User($db, $name, $pass) {
		$sql = "Select * From sh_user WHERE name='$name' AND pass='$pass';";
		$results = $db->query($sql);
		if($results->rowCount() == 0) {
			return -1;
		}
		$row = $results->fetch();
		return $row['id'];
	}
	
	function get_User_No_Auth($db, $name) {
		$sql = "Select * From sh_user WHERE name='$name';";
		$results = $db->query($sql);
		if($results->rowCount() == 0) {
			return -1;
		}
		$row = $results->fetch();
		return $row['id'];
	}
	
	function get_Products($db) {
		$sql = "Select sh_products.product_id, sh_products.product, sh_products.price, sh_products.image, sh_categories.category From sh_products Join sh_categories ON sh_categories.category_id=sh_products.category_id ORDER BY sh_categories.category_id ASC, sh_products.product ASC;";
		$results = $db->query($sql);
		return $results;
	}
	
	function get_Categories($db) {
		$sql = "Select * From sh_categories;";
		$results = $db->query($sql);
		return $results;
	}
	
	
?>